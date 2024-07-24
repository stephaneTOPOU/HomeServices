<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = ServiceCategory::all();
        $cat = ServiceCategory::all()->take(8);
        
        return view('livewire.home-component',['categories'=>$categories, 'cat'=>$cat])->layout('layouts.base');
    }
}
