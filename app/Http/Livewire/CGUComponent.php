<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class CGUComponent extends Component
{
    public function boot()
    {
        View::share('value', "https://www.homes-services.com/cgu");
        View::share('value2', "https://www.homes-services.com/cgu");
    }

    public function render()
    {
        return view('livewire.c-g-u-component')->layout('layouts.base');
    }
}
