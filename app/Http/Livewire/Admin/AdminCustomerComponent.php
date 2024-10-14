<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminCustomerComponent extends Component
{
    public function deleteCustomer($user_id)
    {
        $customer = User::find($user_id);

        $customer->delete();
        session()->flash('message', 'Client supprimé avec succes !');
    }

    public function render()
    {
        $customers = User::where('utype', 'CST')->paginate(12);
        return view('livewire.admin.admin-customer-component', ['customers' => $customers])->layout('layouts.base');
    }
}
