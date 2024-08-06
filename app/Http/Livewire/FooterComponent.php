<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class FooterComponent extends Component
{
    public function render()
    {
        $apps = Service::where('service_category_id', 14)->take(6)->get();
        $clims = Service::where('service_category_id', 1)->take(6)->get();
        $footers = Service::where('service_category_id', 5)->take(6)->get();
        return view('livewire.footer-component',['apps'=>$apps, 'clims'=>$clims, 'footers'=>$footers])->layout('layouts.base');
    }
}
