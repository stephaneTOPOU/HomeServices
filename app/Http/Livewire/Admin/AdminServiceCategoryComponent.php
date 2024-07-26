<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceCategoryComponent extends Component
{
    use WithPagination;

    public function deleteCategory ($id) {
        $scategories = ServiceCategory::find($id);

        if ($scategories->image) {
            unlink('images/categories'.'/'.$scategories->image);
        }

        $scategories->delete();

        session()->flash('message', 'Catégorie supprimée avec succes !');
    }

    public function render()
    {
        $categories = ServiceCategory::paginate(10);
        return view('livewire.admin.admin-service-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
