<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class ServiceCategoriesComponent extends Component
{
    public function boot()
    {
        View::share('value', 'https://www.homes-services.com/service-categories');
        View::share('value2', 'https://www.homes-services.com/service-categories');
    }

    public function render()
    {
        $categories = ServiceCategory::all();

        return view('livewire.service-categories-component', ['categories' => $categories])->layout('layouts.base');
    }
}
