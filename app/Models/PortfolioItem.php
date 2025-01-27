<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'short_description',
        'image',
        'preview_image',
        'website_url',
        'technologies',
        'features',
        'is_active',
        'sort_order',
        'youtube_url',
    ];

    protected $casts = [
        'technologies' => 'array',
        'features' => 'array',
        'is_active' => 'boolean',
    ];
}