<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\Service;
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
    public $service_id;
    public $service_location;
    public $newimage;
    public $disponible = false;
    public $annee_experience;
    public $nbre_mission;

    public function mount()
    {
        $sprofiles = ServiceProvider::where('user_id', Auth::user()->id)->first();

        $this->service_provider_id = $sprofiles->id;
        $this->image = $sprofiles->image;
        $this->about = $sprofiles->about;
        $this->city = $sprofiles->city;
        $this->service_id = $sprofiles->service_id;
        $this->service_location = $sprofiles->service_location;
        $this->disponible = $sprofiles->disponible;
        $this->annee_experience = $sprofiles->annee_experience;
        $this->nbre_mission = $sprofiles->nbre_mission;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'service_provider_id' => 'required',
            'about' => 'required',
            'city' => 'required',
            'service_id' => 'required',
            'service_location' => 'required',
            'annee_experience' => 'required',
            'nbre_mission' => 'required',
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
            'service_id' => 'required',
            'service_location' => 'required',
            'annee_experience' => 'required',
            'nbre_mission' => 'required',
        ]);

        if ($this->newimage) {
            $this->validate([
                'newimage' => 'required|mimes:png,jpg'
            ]);
        }
        $sprofiles = ServiceProvider::where('user_id', Auth::user()->id)->first();
        
        if ($this->disponible) {
            $sprofiles->disponible = $this->disponible;
        }else {
            $sprofiles->disponible = 0;
        }

        $sprofiles->about = $this->about;
        $sprofiles->city = $this->city;
        $sprofiles->service_id = $this->service_id;
        $sprofiles->service_location = $this->service_location;
        $sprofiles->annee_experience = $this->annee_experience;
        $sprofiles->nbre_mission = $this->nbre_mission;

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
        $services = Service::all();
        return view('livewire.sprovider.edit-sprovider-profile-component', ['services' => $services])->layout('layouts.base');
    }
}
