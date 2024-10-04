<?php

namespace App\Http\Livewire\Customer;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomerDashboardComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get()->take(10);
        $totalCost = Order::where('status','!=','canceled')->where('user_id',Auth::user()->id)->sum('total');
        $totalPurchase = Order::where('status','!=','canceled')->where('user_id',Auth::user()->id)->count();
        $totalDeliver = Order::where('status','delivered')->where('user_id',Auth::user()->id)->count();
        $totalCancel = Order::where('status','canceled')->where('user_id',Auth::user()->id)->count();

        return view('livewire.customer.customer-dashboard-component',['orders'=>$orders,'totalCost'=>$totalCost,'totalPurchase'=>$totalPurchase,'totalDeliver'=>$totalDeliver,'totalCancel'=>$totalCancel])->layout('layouts.base');
    }
}
