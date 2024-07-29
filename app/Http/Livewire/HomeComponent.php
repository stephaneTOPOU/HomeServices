<?php

namespace App\Http\Livewire;

use App\Models\Service;
use App\Models\ServiceCategory;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = ServiceCategory::inRandomOrder()->get();
        $fservices = Service::where('featured', 1)->inRandomOrder()->take(8)->get();
        $fcategories = ServiceCategory::where('featured', 1)->inRandomOrder()->take(8)->get();
        $id = ServiceCategory::whereIn('slug', ['air-conditionne','television','refrigerateur','geyser','micro-onde'])->get()->pluck('id');
        $aservices = Service::whereIn('service_category_id', $id)->inRandomOrder()->take(5)->get();
        return view('livewire.home-component',['categories'=>$categories, 'fservices'=>$fservices,'fcategories'=>$fcategories, 'aservices'=>$aservices])->layout('layouts.base');
    }
}
