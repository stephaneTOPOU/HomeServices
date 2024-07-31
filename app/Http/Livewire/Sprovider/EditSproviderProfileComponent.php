<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSproviderProfileComponent extends Component
{
    use WithFileUploads;

    public $service_provider_id;
    public $image;
    public $about;
    public $city;
    public $service_category_id;
    public $service_location;
    public $newimage;

    public function mount()
    {
        $sprofiles = ServiceProvider::where('user_id', Auth::user()->id)->first();

        $this->service_provider_id = $sprofiles->id;
        $this->image = $sprofiles->image;
        $this->about = $sprofiles->about;
        $this->city = $sprofiles->city;
        $this->service_category_id = $sprofiles->service_category_id;
        $this->service_location = $sprofiles->service_location;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'service_provider_id' => 'required',
            'about' => 'required',
            'city' => 'required',
            'service_category_id' => 'required',
            'service_location' => 'required',
        ]);

        if ($this->newimage) {
            $this->validate([
                'newimage' => 'required|mimes:png,jpg'
            ]);
        }
    }

    public function updateProfile()
    {
        $this->validate([
            'service_provider_id' => 'required',
            'about' => 'required',
            'city' => 'required',
            'service_category_id' => 'required',
            'service_location' => 'required',
        ]);

        if ($this->newimage) {
            $this->validate([
                'newimage' => 'required|mimes:png,jpg'
            ]);
        }
        $sprofiles = ServiceProvider::where('user_id', Auth::user()->id)->first();
        
        $sprofiles->about = $this->about;
        $sprofiles->city = $this->city;
        $sprofiles->service_category_id = $this->service_category_id;
        $sprofiles->service_location = $this->service_location;

        if ($this->newimage) {            
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('sprovider', $imageName);
            $sprofiles->image = $imageName;
        }

        $sprofiles->save();
        session()->flash('message', 'Profile modifié avec succes !');
    }

    public function render()
    {
        $categories = ServiceCategory::all();
        return view('livewire.sprovider.edit-sprovider-profile-component', ['categories' => $categories])->layout('layouts.base');
    }
}
