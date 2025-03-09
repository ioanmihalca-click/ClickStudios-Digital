<?php

namespace App\Helpers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class LocaleHelper
{
    public static function getCanonicalUrl(): string
    {
        return URL::current();
    }

    public static function getAlternateUrls(): array
    {
        $currentRoute = Route::getCurrentRoute();
        if (!$currentRoute) {
            return [];
        }

        $params = $currentRoute->parameters();
        $name = $currentRoute->getName();
        $alternates = [];

        foreach (['en', 'ro'] as $locale) {
            if ($locale === App::getLocale()) {
                continue;
            }

            // Update the locale parameter while preserving other route parameters
            $params['locale'] = $locale;
            
            try {
                $url = route($name, $params, true);
                $alternates[$locale] = $url;
            } catch (\Exception $e) {
                continue;
            }
        }

        return $alternates;
    }

    public static function getCurrentLocale(): string
    {
        return App::getLocale();
    }

    public static function getLocalizedRoute(string $name, array $parameters = [], string $locale = null): string
    {
        $locale = $locale ?? App::getLocale();
        $parameters['locale'] = $locale;

        return route($name, $parameters);
    }

    public static function getAlternateLocaleUrl(string $targetLocale): ?string
    {
        $currentRoute = Route::getCurrentRoute();
        if (!$currentRoute) {
            return null;
        }

        $params = $currentRoute->parameters();
        $params['locale'] = $targetLocale;

        try {
            return route($currentRoute->getName(), $params);
        } catch (\Exception $e) {
            return null;
        }
    }

    public static function getHreflangTags(): string
    {
        $tags = [];
        $currentLocale = self::getCurrentLocale();
        
        // Add x-default hreflang for homepage
        if (Request::path() === $currentLocale) {
            $tags[] = '<link rel="alternate" href="' . url('/') . '" hreflang="x-default">';
        }

        // Add current locale canonical
        $tags[] = '<link rel="canonical" href="' . self::getCanonicalUrl() . '">';

        // Add alternate locale tags
        foreach (self::getAlternateUrls() as $locale => $url) {
            $tags[] = '<link rel="alternate" hreflang="' . $locale . '" href="' . $url . '">';
        }

        return implode("\n    ", $tags);
    }
}