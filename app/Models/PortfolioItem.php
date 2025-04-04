<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class PortfolioItem extends Model
{
    protected $fillable = [
        'title',
        'title_ro',
        'slug',
        'short_description',
        'short_description_ro',
        'description',
        'description_ro',
        'image',
        'technologies',
        'features',
        'features_ro',
        'website_url',
        'youtube_url',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'technologies' => 'array',
        'features' => 'array',
        'features_ro' => 'array',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
    ];

    // Metode pentru obținerea conținutului localizat
    public function getLocalizedTitle()
    {
        return App::getLocale() === 'ro' && !empty($this->title_ro)
            ? $this->title_ro
            : $this->title;
    }

    public function getLocalizedShortDescription()
    {
        return App::getLocale() === 'ro' && !empty($this->short_description_ro)
            ? $this->short_description_ro
            : $this->short_description;
    }

    public function getLocalizedDescription()
    {
        return App::getLocale() === 'ro' && !empty($this->description_ro)
            ? $this->description_ro
            : $this->description;
    }

    public function getLocalizedFeatures()
    {
        return App::getLocale() === 'ro' && !empty($this->features_ro)
            ? $this->features_ro
            : $this->features;
    }

    public function getTechnologiesAttribute($value)
    {
        return $value ?? [];
    }
    
    // Îmbunătățire pentru afișarea corectă a caracteristicilor
    public function getFeaturesAttribute($value)
    {
        // Dacă e null, returnează array gol
        if (is_null($value)) {
            return [];
        }
        
        // Dacă e deja un array, îl returnează curat
        if (is_array($value)) {
            return array_map(function($item) {
                return html_entity_decode(trim($item), ENT_QUOTES | ENT_HTML5, 'UTF-8');
            }, $value);
        }
        
        // Dacă e string JSON, îl decodează
        if (is_string($value) && (str_starts_with($value, '[') || str_starts_with($value, '{"'))) {
            $decoded = json_decode($value, true);
            if (is_array($decoded)) {
                return array_map(function($item) {
                    return html_entity_decode(trim($item), ENT_QUOTES | ENT_HTML5, 'UTF-8');
                }, $decoded);
            }
        }
        
        // Dacă conține caractere newline, separă după acestea
        if (is_string($value) && (str_contains($value, '\n') || str_contains($value, "\n"))) {
            $items = preg_split('/\\\\n|\n/', $value);
            return array_map(function($item) {
                return html_entity_decode(trim($item), ENT_QUOTES | ENT_HTML5, 'UTF-8');
            }, $items);
        }
        
        // Altfel, tratează ca string cu virgule
        if (is_string($value)) {
            $items = explode(',', $value);
            return array_map(function($item) {
                return html_entity_decode(trim($item), ENT_QUOTES | ENT_HTML5, 'UTF-8');
            }, $items);
        }
        
        return [];
    }
    
    public function setFeaturesAttribute($value)
    {
        // If getting a string with newlines, convert to array
        if (is_string($value) && str_contains($value, '\n')) {
            $this->attributes['features'] = json_encode(explode('\n', $value));
            return;
        }
        
        $this->attributes['features'] = is_array($value) ? json_encode($value) : $value;
    }
    
    // Same treatment for features_ro
    public function getFeaturesRoAttribute($value)
    {
        // If value is a JSON string containing escaped newlines, clean it up
        if (is_string($value) && str_contains($value, '\\n')) {
            $value = str_replace('\n', ',', $value);
            return explode(',', trim($value, '"'));
        }
        
        // If already an array or null, return as is
        if (is_array($value) || is_null($value)) {
            return $value ?? [];
        }
        
        // Otherwise, try to decode JSON
        $decoded = json_decode($value, true);
        return is_array($decoded) ? $decoded : explode(',', $value);
    }
    
    public function setFeaturesRoAttribute($value)
    {
        // If getting a string with newlines, convert to array
        if (is_string($value) && str_contains($value, '\n')) {
            $this->attributes['features_ro'] = json_encode(explode('\n', $value));
            return;
        }
        
        $this->attributes['features_ro'] = is_array($value) ? json_encode($value) : $value;
    }
}
