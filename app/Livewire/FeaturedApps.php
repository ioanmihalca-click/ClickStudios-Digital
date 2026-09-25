<?php

namespace App\Livewire;

use App\Models\PortfolioItem;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FeaturedApps extends Component
{
    public function render(): View
    {
        return view('livewire.featured-apps', [
            'featuredApps' => PortfolioItem::query()->visible()->where('is_featured', true)->take(3)->get(),
        ]);
    }
}
