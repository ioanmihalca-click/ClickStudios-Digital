<?php

namespace App\Livewire;

use App\Models\PortfolioItem;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class PortofoliuProiect extends Component
{
    public PortfolioItem $portfolioItem;

    public function mount(PortfolioItem $portfolioItem): void
    {
        abort_unless($portfolioItem->is_active, 404);

        $this->portfolioItem = $portfolioItem;
    }

    public function render(): View
    {
        $projects = PortfolioItem::query()->visible()->get(['id', 'slug', 'title', 'title_ro']);
        $position = $projects->search(fn (PortfolioItem $project): bool => $project->is($this->portfolioItem));
        $hasNeighbours = $projects->count() > 1;

        $title = $this->portfolioItem->getLocalizedTitle();
        $url = route('portfolio.show', ['locale' => App::getLocale(), 'portfolioItem' => $this->portfolioItem->slug]);
        $imageUrl = $this->portfolioItem->image ? Storage::disk('public')->url($this->portfolioItem->image) : null;

        return view('livewire.portofoliu-proiect', [
            'position' => $position + 1,
            'projectCount' => $projects->count(),
            'previousProject' => $hasNeighbours ? $projects->get(($position - 1 + $projects->count()) % $projects->count()) : null,
            'nextProject' => $hasNeighbours ? $projects->get(($position + 1) % $projects->count()) : null,
        ])
            ->title($title.' | Click Studios Digital')
            ->layoutData([
                'description' => $this->portfolioItem->getLocalizedShortDescription(),
                'ogImage' => $imageUrl,
                'ogType' => 'article',
                'jsonLd' => [
                    [
                        '@type' => 'CreativeWork',
                        'name' => $title,
                        'headline' => $title,
                        'description' => $this->portfolioItem->getLocalizedShortDescription(),
                        'url' => $url,
                        'image' => $imageUrl,
                        'genre' => $this->portfolioItem->getLocalizedCategory(),
                        'keywords' => $this->portfolioItem->stack ? implode(', ', $this->portfolioItem->stack) : null,
                        'dateCreated' => $this->portfolioItem->year ? (string) $this->portfolioItem->year : null,
                        'inLanguage' => App::getLocale(),
                        'creator' => ['@type' => 'Organization', 'name' => 'Click Studios Digital', 'url' => url('/')],
                        'sameAs' => $this->portfolioItem->website_url,
                    ],
                    [
                        '@type' => 'BreadcrumbList',
                        'itemListElement' => [
                            ['@type' => 'ListItem', 'position' => 1, 'name' => __('messages.menu.home'), 'item' => route('home', ['locale' => App::getLocale()])],
                            ['@type' => 'ListItem', 'position' => 2, 'name' => __('messages.menu.portfolio'), 'item' => route('portfolio', ['locale' => App::getLocale()])],
                            ['@type' => 'ListItem', 'position' => 3, 'name' => $title, 'item' => $url],
                        ],
                    ],
                ],
            ]);
    }
}
