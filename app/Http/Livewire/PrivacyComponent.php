<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class PrivacyComponent extends Component
{
    public function boot()
    {
        View::share('value', "https://www.homes-services.com/privacy");
        View::share('value2', "https://www.homes-services.com/privacy");
    }

    public function render()
    {
        return view('livewire.privacy-component')->layout('layouts.base');
    }
}
