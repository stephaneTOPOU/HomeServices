<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class SproviderDashboardComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at', 'DESC')->get()->take(10);
        $totalSales = Order::where('status', 'performed')->count();
        $totalRevenue = Order::where('status', 'performed')->sum('total');
        $todaySales = Order::where('status', 'performed')->whereDate('created_at', Carbon::today())->count();
        $todayRevenue = Order::where('status', 'performed')->whereDate('created_at', Carbon::today())->sum('total');

        return view('livewire.sprovider.sprovider-dashboard-component', [
            'orders' => $orders,
            'totalSales' => $totalSales,
            'totalRevenue' => $totalRevenue,
            'todaySales' => $todaySales,
            'todayRevenue' => $todayRevenue
        ])->layout('layouts.base');
    }
}
