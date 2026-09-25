<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Despre extends Component
{
    public function render(): View
    {
        return view('livewire.despre')
            ->title(__('app.seo.about.title'))
            ->layoutData(['description' => __('app.seo.about.description')]);
    }
}
