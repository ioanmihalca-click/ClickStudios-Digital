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

    public function getTitleAttribute($value)
    {
        return App::getLocale() === 'ro' && !empty($this->title_ro)
            ? $this->title_ro
            : $value;
    }

    public function getShortDescriptionAttribute($value)
    {
        return App::getLocale() === 'ro' && !empty($this->short_description_ro)
            ? $this->short_description_ro
            : $value;
    }

    public function getDescriptionAttribute($value)
    {
        return App::getLocale() === 'ro' && !empty($this->description_ro)
            ? $this->description_ro
            : $value;
    }

    public function getTechnologiesAttribute($value)
    {
        return $value ?? [];
    }

    public function getFeaturesAttribute($value)
    {
        $features = App::getLocale() === 'ro' && !empty($this->features_ro)
            ? $this->features_ro
            : $value;

        return $features ?? [];
    }
}
