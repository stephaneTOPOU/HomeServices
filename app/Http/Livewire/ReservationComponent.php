<?php

namespace App\Http\Livewire;

use App\Mail\TestMail;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Service;
use App\Models\Shipping;
use App\Models\Transaction;
use Cartalyst\Stripe\Stripe;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\Request;

class ReservationComponent extends Component
{
    public $ship_to_different;
    public $service_id;

    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $city;
    public $province;
    public $country;


    public $s_firstname;
    public $s_lastname;
    public $s_email;
    public $s_mobile;
    public $s_city;
    public $s_province;
    public $s_country;

    public $paymentmode;
    public $thankyou;

    public $card_no;
    public $exp_month;
    public $exp_year;
    public $cvc;

    public $service_slug;

    public function mount ($service_slug)
    {
        $this->service_slug = $service_slug;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',            
            'city' => 'required',            
            'country' => 'required',            
            'paymentmode' => 'required'
        ]);

        if($this->ship_to_different){
            $this->validateOnly($fields,[
                's_firstname' => 'required',
                's_lastname' => 'required',
                's_email' => 'required|email',
                's_mobile' => 'required|numeric',                
                's_city' => 'required',                
                's_country' => 'required',
            ]);
        }

        if($this->paymentmode == 'card'){
            $this->validateOnly($fields,[
                'card_no' =>'required|numeric',
                'exp_month' =>'required|numeric',
                'exp_year' =>'required|numeric',
                'cvc' =>'required|numeric'
            ]);
        }
    }

    public function placeOrder()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',            
            'city' => 'required',            
            'country' => 'required',            
            'paymentmode' => 'required'
        ]);

        if($this->paymentmode == 'card'){
            $this->validate([
                'card_no' =>'required|numeric',
                'exp_month' =>'required|numeric',
                'exp_year' =>'required|numeric',
                'cvc' =>'required|numeric'
            ]);
        }

        $order = new Order();
        $order->user_id = Auth::user()->id;        
        $order->firstname = $this->firstname;
        $order->lastname = $this->lastname;
        $order->email = $this->email;
        $order->mobile = $this->mobile;    
        $order->city = $this->city;        
        $order->country = $this->country;        
        $order->status = 'ordered';
        $order->is_shipping_different = $this->ship_to_different ? 1:0;
        $order->save();

        $service = Service::where('slug', $this->service_slug)->first();

        
            $orderItem = new Order_item();
            $orderItem->service_id = $service->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $service->price;            
            $orderItem->save();
        

        if($this->ship_to_different){
            $this->validate([
                's_firstname' => 'required',
                's_lastname' => 'required',
                's_email' => 'required|email',
                's_mobile' => 'required|numeric',                
                's_city' => 'required',                
                's_country' => 'required',                
            ]);

            $shipping = new Shipping();
            $shipping->order_id = $order->id;
            $shipping->firstname = $this->s_firstname;
            $shipping->lastname = $this->s_lastname;
            $shipping->email = $this->s_email;
            $shipping->mobile = $this->s_mobile;            
            $shipping->city = $this->s_city;            
            $shipping->country = $this->s_country;            
            $shipping->save();
        }

        if($this->paymentmode == 'cod'){
            $this->makeTransaction($order->id,'pending');
            
        }else if($this->paymentmode == 'card'){
            $stripe = Stripe::make(env('STRIPE_Key'));

            try{
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number' => $this->card_no,
                        'exp_month' => $this->exp_month,
                        'exp_year' => $this->exp_year,
                        'cvc' => $this->cvc
                    ]
                ]);

                if(!isset($token['id'])){
                    session()->flash('stripe_error','Le jeton de la bande na pas été généré correctement !!');
                    $this->thankyou = 0;
                }

                $customer = $stripe->customers()->create([
                    'name' => $this->lastname. ' ' .$this->firstname,
                    'email' => $this->email,
                    'phone' => $this->mobile,
                    'address' => [
                        'line1' => $this->line1,
                        'postal_code' => $this->zipcode,
                        'city' => $this->city,
                        'state' => $this->province,
                        'country' => $this->country
                    ],
                    'shipping' => [
                        'name' => $this->lastname. ' ' .$this->firstname,
                        'address' => [
                            'line1' => $this->line1,
                            'postal_code' => $this->zipcode,
                            'city' => $this->city,
                            'state' => $this->province,
                            'country' => $this->country
                        ],
                    ],
                    'source' => $token['id']
                ]);

                $charge = $stripe->charges()->create([
                    'customer' => $customer['id'],
                    'currency' => 'XOF',
                    'amount' => session()->get('checkout')['total'],
                    'description' => 'Paiement pour la commande no ' . $order->id
                ]);

                if($charge['status'] == 'succeeded'){
                    $this->makeTransaction($order->id,'approved');
                    
                }else{
                    session()->flash('stripe_error','Erreur dans la transaction !');
                    $this->thankyou = 0;
                }
            }catch(Exception $e){
                session()->flash('stripe_error',$e->getMessage());
                $this->thankyou = 0;
            }
        }
        $this->sendOrderConfirmationMail($order);
    }

    public function makeTransaction($order_id,$status)
    {
        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->order_id = $order_id;
        $transaction->mode = $this->paymentmode;
        $transaction->status = $status;
        $transaction->save();
    }

    public function sendOrderConfirmationMail($order)
    {
        Mail::to($order->email)->send(new TestMail($order));
    }
    
    public function verifyReservation()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
    }
    
    public function render()
    {
        $this->verifyReservation();
        return view('livewire.reservation-component')->layout('layouts.base');
    }
}
