<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SproviderProfileComponent extends Component
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
        $sprovider = ServiceProvider::with('user')
            ->whereHas('user', fn($query) => $query->where('id', Auth::user()->id))
            ->first();
            //dd($sprovider);
        return view('livewire.sprovider.sprovider-profile-component', ['sprovider' => $sprovider])->layout('layouts.base');
    }
}
