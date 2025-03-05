<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class ServiceDetailComponent extends Component
{
    public $service_slug;

    public function mount($service_slug)
    {
        $this->service_slug = $service_slug;
    }

    public function reservation()
    {
        if (Auth::check()) {
            return redirect()->route('home.reservation');
        } else {
            return redirect()->route('login');
        }
    }

    public function render()
    {
        $services = Service::where('slug', $this->service_slug)->first();
        $r_services = Service::where('service_category_id', $services->service_category_id)->where('slug', '!=', $this->service_slug)->inRandomOrder()->first();

        $service_id = Service::where('slug', $this->service_slug)->select('id')->first();
        $sproviders = ServiceProvider::where('service_id', $service_id->id)->get();

        if ($services) {
            View::share('value', "https://www.homes-services.com/service/{$services->slug}/details");
            View::share('value2', "https://www.homes-services.com/service/{$services->slug}/details");
        }

        return view('livewire.service-detail-component', ['services' => $services, 'r_services' => $r_services, 'sproviders' => $sproviders])->layout('layouts.base');
    }
}
