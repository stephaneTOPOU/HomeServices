<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithPagination;

class AdminSliderComponent extends Component
{
    use WithPagination;

    public function deleteSlide ($slide_id) {
        $slides = Slider::find($slide_id);

        if ($slides->image) {
            unlink('images/slider'.'/'.$slides->image);
        }

        $slides->delete();

        session()->flash('message', 'Slide supprimé avec succes !');
    }

    public function render()
    {
        $slides = Slider::paginate(10);
        return view('livewire.admin.admin-slider-component',['slides'=>$slides])->layout('layouts.base');
    }
}
