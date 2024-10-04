<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\Order;
use App\Models\Order_item;
use App\Models\ServiceProvider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SproviderDashboardComponent extends Component
{
    public $sprovider_slug;

    public function mount($slug)
    {
        // Récupérer le fournisseur de services avec l'utilisateur correspondant au slug
        $fournisseur = ServiceProvider::with('user')
            ->whereHas('user', fn($query) => $query->where('slug', $slug))
            ->first();

        // Si un fournisseur est trouvé, attribuer son slug à la propriété
        if ($fournisseur) {
            $this->sprovider_slug = $fournisseur->user->slug;
        }
    }

    public function render()
    {
        //dd($this->sprovider_slug);
        $orders = DB::table('order_items')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->join('services', 'order_items.service_id', '=', 'services.id')
            ->join('service_providers', 'service_providers.service_id', '=', 'services.id')
            ->join('users', 'service_providers.user_id', '=', 'users.id')
            ->where('users.slug', $this->sprovider_slug)
            ->orderBy('orders.created_at', 'DESC')
            ->get()
            ->take(10);

        $totalSales = DB::table('order_items')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->join('services', 'order_items.service_id', '=', 'services.id')
            ->join('service_providers', 'service_providers.service_id', '=', 'services.id')
            ->join('users', 'service_providers.user_id', '=', 'users.id')
            ->where('users.slug', $this->sprovider_slug)
            ->where('orders.status', 'performed')
            ->count();

        $totalRevenue = DB::table('order_items')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->join('services', 'order_items.service_id', '=', 'services.id')
            ->join('service_providers', 'service_providers.service_id', '=', 'services.id')
            ->join('users', 'service_providers.user_id', '=', 'users.id')
            ->where('users.slug', $this->sprovider_slug)
            ->where('orders.status', 'performed')
            ->sum('total');

        $todaySales = DB::table('order_items')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->join('services', 'order_items.service_id', '=', 'services.id')
            ->join('service_providers', 'service_providers.service_id', '=', 'services.id')
            ->join('users', 'service_providers.user_id', '=', 'users.id')
            ->where('users.slug', $this->sprovider_slug)
            ->where('orders.status', 'performed')
            ->whereDate('orders.created_at', Carbon::today())
            ->count();

        $todayRevenue = DB::table('order_items')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->join('services', 'order_items.service_id', '=', 'services.id')
            ->join('service_providers', 'service_providers.service_id', '=', 'services.id')
            ->join('users', 'service_providers.user_id', '=', 'users.id')
            ->where('users.slug', $this->sprovider_slug)
            ->where('orders.status', 'performed')
            ->whereDate('orders.created_at', Carbon::today())
            ->sum('total');

        //$orders = Order::orderBy('created_at', 'DESC')->get()->take(10);
        //$totalSales = Order::where('status', 'performed')->count();
        //$totalRevenue = Order::where('status', 'performed')->sum('total');
        //$todaySales = Order::where('status', 'performed')->whereDate('created_at', Carbon::today())->count();
        //$todayRevenue = Order::where('status', 'performed')->whereDate('created_at', Carbon::today())->sum('total');

        return view('livewire.sprovider.sprovider-dashboard-component', [
            'orders' => $orders,
            'totalSales' => $totalSales,
            'totalRevenue' => $totalRevenue,
            'todaySales' => $todaySales,
            'todayRevenue' => $todayRevenue
        ])->layout('layouts.base');
    }
}
