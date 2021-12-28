<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExploreComponent extends Component
{
    public function render()
    {
        return view('livewire.explore-component')->layout("layouts.base");
    }
}
