<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PortfolioItem;
use Illuminate\Support\Facades\Log;

class FeaturedApps extends Component
{
    public function render()
    {
        $featuredApps = PortfolioItem::where('is_active', true)
            ->where('is_featured', true)
            ->orderBy('sort_order')
            ->take(3)
            ->get();

        $featuredApps = $featuredApps->map(function ($item) {
            $data = $item->toArray();

            if (!empty($data['technologies'])) {
                $data['technologies'] = explode(',', $data['technologies']);
            } else {
                $data['technologies'] = [];
            }

            if (!empty($data['features'])) {
                $data['features'] = explode(',', $data['features']);
            } else {
                $data['features'] = [];
            }

            return $data;
        });

        return view('livewire.featured-apps', [
            'featuredApps' => $featuredApps
        ]);
    }
}
