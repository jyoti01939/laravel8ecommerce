<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FeaturesComponent extends Component
{
    public function render()
    {
        return view('livewire.features-component')->layout("layouts.base");
    }
}
