<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

class LanguageController extends Controller
{
    public function switchLocale(Request $request, $locale)
    {
        if (!in_array($locale, ['en', 'ro'])) {
            abort(400);
        }

        session(['locale' => $locale]);
        App::setLocale($locale);

        $previousUrl = url()->previous();
        $baseUrl = url('/');
        
        // If coming from a non-locale URL, redirect to home with new locale
        if ($previousUrl === $baseUrl) {
            return redirect()->route('home', ['locale' => $locale]);
        }

        // Get the current route and its parameters
        $route = Route::current();
        if (!$route) {
            return redirect()->route('home', ['locale' => $locale]);
        }

        // Get current route parameters and update locale
        $parameters = $route->parameters();
        $parameters['locale'] = $locale;

        // Try to generate URL with same route name but new locale
        try {
            $url = route($route->getName(), $parameters);
            return redirect($url);
        } catch (\Exception $e) {
            // Fallback to home page if route generation fails
            return redirect()->route('home', ['locale' => $locale]);
        }
    }
}