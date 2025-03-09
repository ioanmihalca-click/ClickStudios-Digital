<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\App;

#[Title('Services | Click Studios Digital')]
class Servicii extends Component
{
    public function render()
    {
        // Get current locale (just for reference)
        $locale = App::getLocale();

        // Don't try to load any translations here
        // Instead, pass only the necessary data for the view

        // We don't need to preload the translations - let the view handle it
        return view('livewire.servicii');
    }
}
