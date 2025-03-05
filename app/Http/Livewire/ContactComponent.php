<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public function updated ($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
    }

    public function sendMessage ()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->message = $this->message;

        $contact->save();
        session()->flash('message', 'Message soumis avec succes !');
    }

    public function boot()
    {
        View::share('value', "https://www.homes-services.com/contact");
        View::share('value2', "https://www.homes-services.com/contact");
    }

    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}
