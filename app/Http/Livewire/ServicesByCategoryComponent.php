<?php

namespace App\Http\Livewire;

use App\Models\ServiceCategory;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class ServicesByCategoryComponent extends Component
{
    public $category_slug;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $categories = ServiceCategory::where('slug', $this->category_slug)->first();

        //$categories = ServiceCategory::with('services')->get();
        //dd($this->category_slug);

        if ($categories) {
            View::share('value', "https://www.homes-services.com/{$categories->slug}/service");
            View::share('value2', "https://www.homes-services.com/{$categories->slug}/service");
        }

        return view('livewire.services-by-category-component', ['categories' => $categories])->layout('layouts.base');
    }
}
