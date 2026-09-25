<?php

namespace App\Models;

use App\Enums\PortfolioStatus;
use Database\Factories\PortfolioItemFactory;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

class PortfolioItem extends Model
{
    /** @use HasFactory<PortfolioItemFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'title_ro',
        'slug',
        'category',
        'category_ro',
        'status',
        'year',
        'stack',
        'short_description',
        'short_description_ro',
        'description',
        'description_ro',
        'image',
        'markdown_path',
        'website_url',
        'youtube_url',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'status' => PortfolioStatus::class,
        'year' => 'integer',
        'stack' => 'array',
    ];

    /**
     * Items visible on the public site, in display order.
     */
    #[Scope]
    protected function visible(Builder $query): void
    {
        $query->where('is_active', true)->orderBy('sort_order')->orderBy('id');
    }

    // Metode pentru obținerea conținutului localizat
    public function getLocalizedTitle(?string $locale = null)
    {
        return ($locale ?? App::getLocale()) === 'ro' && ! empty($this->title_ro)
            ? $this->title_ro
            : $this->title;
    }

    public function getLocalizedShortDescription(?string $locale = null)
    {
        return ($locale ?? App::getLocale()) === 'ro' && ! empty($this->short_description_ro)
            ? $this->short_description_ro
            : $this->short_description;
    }

    public function getLocalizedDescription()
    {
        return App::getLocale() === 'ro' && ! empty($this->description_ro)
            ? $this->description_ro
            : $this->description;
    }

    public function getLocalizedCategory(?string $locale = null): ?string
    {
        return ($locale ?? App::getLocale()) === 'ro' && ! empty($this->category_ro)
            ? $this->category_ro
            : $this->category;
    }

    /**
     * The localized description rendered from Markdown. Raw HTML in the source is
     * stripped, so an uploaded file can never inject markup into the page.
     */
    public function getLocalizedDescriptionHtml(): HtmlString
    {
        return new HtmlString(Str::markdown((string) $this->getLocalizedDescription(), [
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]));
    }

    public function getYoutubeVideoId(): ?string
    {
        if (empty($this->youtube_url)) {
            return null;
        }

        preg_match('~(?:youtu\.be/|[?&]v=|/embed/|/shorts/)([A-Za-z0-9_-]{11})~', $this->youtube_url, $matches);

        return $matches[1] ?? null;
    }
}
