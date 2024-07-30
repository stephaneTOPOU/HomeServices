<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditSliderComponent extends Component
{
    public $slide_id;
    public $title;
    public $image;
    public $status;
    public $newimage;

    public function mount($slide_id)
    {
        $scategories = Slider::find($slide_id);

        $this->slide_id = $scategories->id;
        $this->title = $scategories->title;
        $this->status = $scategories->status;
        $this->image = $scategories->image;        
    }

    use WithFileUploads;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',                              
        ]);

        if ($this->newimage) {
            $this->validateOnly($fields,[
                'newimage' => 'required|mimes:png,jpg',
            ]);
        }
    }

    public function updateSlider ()
    {
        $this->validate([
            'title' => 'required',                         
        ]);

        if ($this->newimage) {
            $this->validate([
                'newimage' => 'required|mimes:png,jpg',
            ]);
        }

        $slides = Slider::find($this->slide_id);
        $slides->title = $this->title;
        $slides->status = $this->status;     
        
        if ($this->newimage) {
            unlink('images/slider'.'/'.$slides->image);
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('slider', $imageName);
            $slides->image = $imageName;
        }         
        
        $slides->save();
        session()->flash('message', 'Slide modifié avec succes !');
    }
    
    public function render()
    {
        return view('livewire.admin.admin-edit-slider-component')->layout('layouts.base');
    }
}
