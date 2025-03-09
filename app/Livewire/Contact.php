<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class Contact extends Component
{
    public function render()
    {

        $locale = App::getLocale();

        return view('livewire.contact');
    }
}
