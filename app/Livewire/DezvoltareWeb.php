<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Web Development | Click Studios Digital')]
class DezvoltareWeb extends Component
{
    public function render()
    {
        return view('livewire.dezvoltare-web');
    }
}
