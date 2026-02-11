<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PortfolioItem;
use Livewire\Attributes\Title;

#[Title('Portfolio | Click Studios Digital')]
class Portofoliu extends Component
{
    public $portfolioItems;

    public function mount()
    {
        $items = PortfolioItem::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $this->portfolioItems = $items->map(function ($item) {
            return [
                'id' => $item->id,
                'title' => $item->getLocalizedTitle(),
                'slug' => $item->slug,
                'short_description' => $item->getLocalizedShortDescription(),
                'description' => $item->getLocalizedDescription(),
                'image' => $item->image,
                'website_url' => $item->website_url,
                'youtube_url' => $item->youtube_url,
                'is_featured' => $item->is_featured,
                'is_active' => $item->is_active,
                'sort_order' => $item->sort_order,
            ];
        })->toArray();
    }

    public function render()
    {
        return view('livewire.portofoliu');
    }
}
