<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\App;

#[Title('Web Development | Click Studios Digital')]
class DezvoltareWeb extends Component
{
    public function render()
    {
        // Get current locale
        $locale = App::getLocale();

        // We don't need to preload the translations - let the view handle it
        return view('livewire.dezvoltare-web');
    }
}
