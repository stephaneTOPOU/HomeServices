<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceProvider;
use Livewire\Component;

class AdminEditServiceProvidersComponent extends Component
{
    public $valide;
    public $sprovider_id;

    public function mount ($id)
    {
        $sprovider = ServiceProvider::find($id);

        $this->sprovider_id = $sprovider->id;
        $this->valide = $sprovider->valide;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'valide' => 'boolean',
        ]);
    }

    public function updateSprovider()
    {
        $this->validate([
            'valide' => 'boolean',
        ]);
        //dd($this->sprovider_id);

        $sprovider = ServiceProvider::find($this->sprovider_id);
        $sprovider->valide = $this->valide;

        $sprovider->save();
        session()->flash('message', 'Fournisseur validé avec succes !');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-service-providers-component')->layout('layouts.base');
    }
}
