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
            $data = $item->toArray();

            // Convertim string-ul de technologies în array
            if (!empty($data['technologies'])) {
                $data['technologies'] = explode(',', $data['technologies']);
            } else {
                $data['technologies'] = [];
            }

            // Convertim string-ul de features în array
            if (!empty($data['features'])) {
                $data['features'] = explode(',', $data['features']);
            } else {
                $data['features'] = [];
            }

            return $data;
        })->toArray();
    }

    public function render()
    {
        return view('livewire.portofoliu');
    }
}
