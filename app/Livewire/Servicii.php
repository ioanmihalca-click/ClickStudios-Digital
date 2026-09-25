<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Servicii extends Component
{
    public function render(): View
    {
        return view('livewire.servicii')
            ->title(__('app.seo.services.title'))
            ->layoutData(['description' => __('app.seo.services.description')]);
    }
}
