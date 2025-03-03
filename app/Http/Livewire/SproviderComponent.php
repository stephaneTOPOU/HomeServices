<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\ServiceProvider;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class SproviderComponent extends Component
{
    public $service_slug;

    public function mount($service_slug)
    {
        $this->service_slug = $service_slug;
    }

    public function render()
    {
        $service_id = Service::where('slug', $this->service_slug)->select('id')->first();
        // dd($service_id);
        $services = Service::where('slug', $this->service_slug)->first();
        $sproviders = ServiceProvider::where('service_id', $service_id->id)->where('valide', 1)->get();

        foreach ($sproviders as $sproviders) {
            View::share('value', 'https://www.homes-services.com/{{ $sproviders->name }}/service');
            View::share('value2', 'https://www.homes-services.com/{{ $sproviders->name }}/service');
        }

        return view('livewire.sprovider-component', ['sproviders' => $sproviders, 'services' => $services])->layout('layouts.base');
    }
}
