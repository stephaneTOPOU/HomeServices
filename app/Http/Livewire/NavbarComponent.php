<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class NavbarComponent extends Component
{
    public function render()
    {
        $appliances = Service::where('service_category_id', 14)->take(6)->get();
        $homes = Service::where('service_category_id', 5)->take(6)->get();        
        return view('livewire.navbar-component',['appliances'=>$appliances, 'homes'=>$homes])->layout('layouts.base');
    }
}
