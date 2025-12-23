<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class DezvoltareWeb extends Component
{
    public function render()
    {
        // Get current locale (for reference)
        $locale = App::getLocale();

        return view('livewire.dezvoltare-web', [
            'title' => __('messages.web_development.meta.title'),
            'description' => __('messages.web_development.meta.description'),
        ]);
    }
}
