<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Servicii | Click Studios Digital')]
class Servicii extends Component
{
    public function render()
    {
        return view('livewire.servicii');
    }
}
