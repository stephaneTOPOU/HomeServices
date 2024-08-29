<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\ServiceProvider;
use Livewire\Component;

class SproviderComponent extends Component
{
    public $service_slug;

    public function mount ($service_slug)
    {
        $this->service_slug = $service_slug;
    }

    public function render()
    {
        $service_id = Service::where('slug', $this->service_slug)->select('id')->first();
        // dd($service_id);
        $services = Service::where('slug', $this->service_slug)->first();
        $sproviders = ServiceProvider::where('service_id',$service_id->id)->get();
        return view('livewire.sprovider-component', ['sproviders'=>$sproviders, 'services'=>$services])->layout('layouts.base');
    }
}
