<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->route('locale');

        // Skip locale check for routes that don't have a locale parameter
        // This allows the root URL to work without a locale
        if ($locale === null) {
            return $next($request);
        }

        if (!in_array($locale, ['en', 'ro'])) {
            return response('Invalid locale', 400);
        }

        app()->setLocale($locale);
        $request->session()->put('locale', $locale);

        return $next($request);
    }
}
