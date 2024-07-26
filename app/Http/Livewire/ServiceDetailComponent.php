<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServiceDetailComponent extends Component
{
    public $service_slug;

    public function mount ($service_slug)
    {
        $this->service_slug = $service_slug;
    }

    public function render()
    {
        $services = Service::where('slug', $this->service_slug)->first();
        $r_services = Service::where('service_category_id', $services->service_category_id)->where('slug', '!=', $this->service_slug)->inRandomOrder()->first();

        return view('livewire.service-detail-component', ['services'=>$services, 'r_services'=>$r_services])->layout('layouts.base');
    }
}
