<?php

namespace App\Livewire;

use App\Models\PortfolioItem;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Homepage extends Component
{
    public function render(): View
    {
        return view('livewire.homepage', [
            'projects' => PortfolioItem::query()->visible()->get(),
        ])
            ->title(__('app.seo.home.title'))
            ->layoutData(['description' => __('app.seo.home.description')]);
    }
}
