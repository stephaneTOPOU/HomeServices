<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class ThankYouComponent extends Component
{
    public function boot()
    {
        View::share('value', "https://www.homes-services.com/thank-you");
        View::share('value2', "https://www.homes-services.com/thank-you");
    }

    public function render()
    {
        return view('livewire.thank-you-component')->layout('layouts.base');
    }
}
