<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditServiceCategoryComponent extends Component
{
    use WithFileUploads;

    public $category_id;
    public $name;
    public $slug;
    public $image;
    public $newimage;

    public function mount($category_id)
    {
        $scategories = ServiceCategory::find($category_id);

        $this->category_id = $scategories->id;
        $this->name = $scategories->name;
        $this->slug = $scategories->slug;
        $this->image = $scategories->image;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required',
        ]);

        if ($this->newimage) {
            $this->validate([
                'newimage' => 'required|mimes:png,jpg'
            ]);
        }
    }

    public function updateCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',

        ]);

        if ($this->newimage) {
            $this->validate([
                'newimage' => 'required|mimes:png,jpg'
            ]);
        }
        $scategory = ServiceCategory::find($this->category_id);
        $scategory->name = $this->name;
        $scategory->slug = $this->slug;

        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('categories', $imageName);
            $scategory->image = $imageName;
        }

        $scategory->save();
        session()->flash('message', 'Catégorie modifiée avec succes !');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-service-category-component')->layout('layouts.base');
    }
}
