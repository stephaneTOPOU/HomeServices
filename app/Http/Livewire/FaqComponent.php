<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class FaqComponent extends Component
{
    public function boot()
    {
        View::share('value', "https://www.homes-services.com/faq");
        View::share('value2', "https://www.homes-services.com/faq");
    }

    public function render()
    {
        return view('livewire.faq-component')->layout('layouts.base');
    }
}
