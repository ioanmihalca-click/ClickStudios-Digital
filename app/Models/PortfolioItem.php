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
        'website_url',
        'youtube_url',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
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

}
