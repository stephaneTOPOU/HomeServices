<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class AboutComponent extends Component
{
    public function boot()
    {
        View::share('value', 'https://www.homes-services.com/about');
        View::share('value2', 'https://www.homes-services.com/about');
    }

    public function render()
    {
        return view('livewire.about-component')->layout('layouts.base');
    }
}
