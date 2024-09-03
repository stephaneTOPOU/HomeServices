<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\Order;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SproviderOrderComponent extends Component
{
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
        $orders = Order::orderBy('created_at', 'DESC')->paginate(12);
        return view('livewire.sprovider.sprovider-order-component', ['orders' => $orders])->layout("layouts.base");
    }
}
