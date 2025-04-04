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
            ->get()
            ->map(function ($item) {
                $data = [
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

                // Procesează tehnologiile
                if (!empty($item->technologies)) {
                    $data['technologies'] = is_string($item->technologies)
                        ? explode(',', $item->technologies)
                        : $item->technologies;
                } else {
                    $data['technologies'] = [];
                }

                // Procesează funcționalitățile
                $localizedFeatures = $item->getLocalizedFeatures();
                if (!empty($localizedFeatures)) {
                    if (is_string($localizedFeatures)) {
                        // Verifică dacă e un JSON string
                        if (str_starts_with($localizedFeatures, '[') && str_ends_with($localizedFeatures, ']')) {
                            $data['features'] = json_decode($localizedFeatures, true);
                        } 
                        // Verifică dacă conține newlines
                        elseif (str_contains($localizedFeatures, '\n')) {
                            $data['features'] = explode('\n', str_replace('"', '', $localizedFeatures));
                        } 
                        // Altfel, tratează ca un string separat prin virgule
                        else {
                            $data['features'] = explode(',', $localizedFeatures);
                        }
                        
                        // Curăță fiecare element
                        $data['features'] = array_map(function($feat) {
                            return trim(str_replace(['"', "'", "\\"], '', $feat));
                        }, $data['features']);
                    } else {
                        // Este deja un array
                        $data['features'] = array_map(function($feat) {
                            return trim(str_replace(['"', "'", "\\"], '', $feat));
                        }, $localizedFeatures);
                    }
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
