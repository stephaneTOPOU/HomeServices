<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceProvider;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceProvidersComponent extends Component
{
    use WithPagination;

    public function deleteSprovider($sprovider_id)
    {
        $sprovider = ServiceProvider::find($sprovider_id);

        if ($sprovider->image) {
            unlink('images/sprovider' . '/' . $sprovider->image);
        }

        $sprovider->delete();
        session()->flash('message', 'Fournisseur supprimé avec succes !');
    }

    public function render()
    {
        $sproviders = ServiceProvider::paginate(12);
        return view('livewire.admin.admin-service-providers-component', ['sproviders' => $sproviders])->layout('layouts.base');
    }
}
