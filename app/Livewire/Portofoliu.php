<?php

namespace App\Livewire;

use App\Models\PortfolioItem;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Portofoliu extends Component
{
    public function render(): View
    {
        return view('livewire.portofoliu', [
            'portfolioItems' => PortfolioItem::query()->visible()->get(),
        ])
            ->title(__('app.seo.portfolio.title'))
            ->layoutData(['description' => __('app.seo.portfolio.description')]);
    }
}
