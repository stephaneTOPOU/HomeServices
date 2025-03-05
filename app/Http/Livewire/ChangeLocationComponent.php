<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class ChangeLocationComponent extends Component
{
    public $streetnumber;
    public $routes;
    public $city;
    public $state;
    public $country;
    public $pincode;

    public function changeLocation()
    {
        session()->put('streetnumber', $this->streetnumber);
        session()->put('routes', $this->routes);
        session()->put('city', $this->city);
        session()->put('state', $this->state);
        session()->put('country', $this->country);
        session()->put('pincode', $this->pincode);
        session()->flash('message', 'Localisation changée avec success !');
        $this->emitTo('location-component', 'refreshComponent');
    }

    public function boot()
    {
        View::share('value', "https://www.homes-services.com/change-location");
        View::share('value2', "https://www.homes-services.com/change-location");
    }

    public function render()
    {
        return view('livewire.change-location-component')->layout('layouts.base');
    }
}
