<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KidsComponent extends Component
{
    public function render()
    {
        return view('livewire.kids-component')->layout("layouts.base");
    }
}
