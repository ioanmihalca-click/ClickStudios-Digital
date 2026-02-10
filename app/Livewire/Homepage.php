<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Click Studios Digital')]
class Homepage extends Component
{
    public function render()
    {
        return view('livewire.homepage');
    }
}
