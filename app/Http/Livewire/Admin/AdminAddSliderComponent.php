<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddSliderComponent extends Component
{
    public $title;
    public $image;
    public $status = 0;

    use WithFileUploads;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',                                   
            'image' => 'required|mimes:png,jpg',                   
        ]);
    }

    public function createSlider ()
    {
        $this->validate([
            'title' => 'required',                            
            'image' => 'required|mimes:png,jpg',                        
        ]);

        $slides = new Slider();
        $slides->title = $this->title;
        $slides->status = $this->status;     
        

        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('slider', $imageName);
        $slides->image = $imageName;
        
        $slides->save();
        session()->flash('message', 'Slide créé avec succes !');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-slider-component')->layout('layouts.base');
    }
}
