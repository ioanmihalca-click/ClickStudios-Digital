<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use Illuminate\Support\Facades\Storage;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Symfony\Component\HttpFoundation\Response;

/**
 * Sitemap built on every request, so new portfolio items appear immediately.
 * Every URL lists its other language versions (hreflang alternates).
 */
class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $locales = config('app.supported_locales');
        $sitemap = Sitemap::create();

        foreach (config('site.pages') as $page) {
            foreach ($locales as $locale) {
                $url = Url::create(route($page, ['locale' => $locale]));

                foreach ($locales as $alternateLocale) {
                    $url->addAlternate(route($page, ['locale' => $alternateLocale]), $alternateLocale);
                }

                $sitemap->add($url);
            }
        }

        foreach (PortfolioItem::query()->visible()->get() as $item) {
            foreach ($locales as $locale) {
                $url = Url::create(route('portfolio.show', ['locale' => $locale, 'portfolioItem' => $item->slug]))
                    ->setLastModificationDate($item->updated_at);

                foreach ($locales as $alternateLocale) {
                    $url->addAlternate(route('portfolio.show', ['locale' => $alternateLocale, 'portfolioItem' => $item->slug]), $alternateLocale);
                }

                if ($item->image) {
                    $url->addImage(Storage::disk('public')->url($item->image), $item->title);
                }

                $sitemap->add($url);
            }
        }

        return $sitemap->toResponse(request());
    }
}
