<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\Order;
use App\Models\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SproviderOrderDetailsComponent extends Component
{
    public $order_id;
    public $sprovider_slug;

    public function mount($slug, $order_id)
    {
        $this->$order_id = $order_id;
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
        $order = Order::with(['orderItems.service.serviceProvider.user'])
            ->find($this->order_id);

        if ($order) {
            // Filtrer par le slug de l'utilisateur
            $filteredItems = $order->orderItems->filter(function ($item) {
                return $item->service->serviceProvider->user->slug === $this->sprovider_slug;
            });

            if ($filteredItems->isNotEmpty()) {
                // Accéder aux informations
                foreach ($filteredItems as $item) {
                    $this->sprovider_slug = $item->service->serviceProvider->user->slug;
                    // Vous pouvez aussi accéder à d'autres informations comme:
                    $serviceName = $item->service->name;
                    $identifiant = $order->id;
                    $nom = $order->lastname;
                    $prenom = $order->firstname;
                }
            }
        }


        return view('livewire.sprovider.sprovider-order-details-component', ['order' => $order])->layout("layouts.base");
    }
}
