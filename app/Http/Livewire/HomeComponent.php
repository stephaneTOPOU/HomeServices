<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\Slider;
use Livewire\Component;
use Illuminate\Support\Facades\View;

class HomeComponent extends Component
{
    public function boot()
    {
        View::share('value', "https://www.homes-services.com/");
        View::share('value2', "https://www.homes-services.com/");
    }

    public function render()
    {
        $categories = ServiceCategory::inRandomOrder()->get();
        $fservices = Service::where('featured', 1)->inRandomOrder()->take(8)->get();
        $fcategories = ServiceCategory::where('featured', 1)->inRandomOrder()->take(8)->get();
        $id = ServiceCategory::whereIn('slug', ['air-conditionne', 'television', 'refrigerateur', 'geyser', 'micro-onde'])->get()->pluck('id');
        $aservices = Service::whereIn('service_category_id', $id)->inRandomOrder()->take(5)->get();
        $slides = Slider::where('status', 1)->get();


        return view('livewire.home-component', ['categories' => $categories, 'fservices' => $fservices, 'fcategories' => $fcategories, 'aservices' => $aservices, 'slides' => $slides])->layout('layouts.base');
    }
}
