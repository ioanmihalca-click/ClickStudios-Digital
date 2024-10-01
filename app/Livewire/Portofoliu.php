<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Portofoliu | Click Studios Digital')]
class Portofoliu extends Component
{
    public function render()
    {
        return view('livewire.portofoliu');
    }
}
