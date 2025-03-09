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

        // Debug mai detaliat pentru întregul obiect
        Log::info('Full Featured Apps Object:', [
            'raw_data' => $featuredApps->toArray(),
        ]);

        $featuredApps = $featuredApps->map(function ($item) {
            $data = $item->toArray();

            // Debug pentru URL
            Log::info('Processing item:', [
                'title' => $data['title'],
                'website_url' => $data['website_url'] ?? null,
                'has_url' => isset($data['website_url']),
                'url_empty' => empty($data['website_url']),
                'url_type' => gettype($data['website_url'] ?? null)
            ]);

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
