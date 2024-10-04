<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\Order;
use App\Models\ServiceProvider;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SproviderOrderComponent extends Component
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

    public function updateOrderStatus($order_id, $status)
    {
        try {
            $order = Order::find($order_id);

            $order->status = $status;
            if ($status == "performed") {
                $order->delivered_date = DB::raw('CURRENT_DATE');
            } else if ($status == "canceled") {
                $order->canceled_date = DB::raw('CURRENT_DATE');
            }

            $order->save();
            session()->flash('order_message', 'le statut de la commande a été mis à jour avec succès !!');
        } catch (Exception $e) {
            session()->flash('message', $e->getMessage());
        }
    }

    public function render()
    {
        $orders = DB::table('order_items')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->join('services', 'order_items.service_id', '=', 'services.id')
            ->join('service_providers', 'service_providers.service_id', '=', 'services.id')
            ->join('users', 'service_providers.user_id', '=', 'users.id')
            ->where('users.slug', $this->sprovider_slug)
            ->select('*', 'orders.id as identifant', 'orders.lastname as nom', 'orders.firstname as prenom')
            ->orderBy('orders.created_at', 'DESC')
            ->paginate(12);
        return view('livewire.sprovider.sprovider-order-component', ['orders' => $orders])->layout("layouts.base");
    }
}
