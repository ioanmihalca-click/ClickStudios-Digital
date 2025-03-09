<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Try to get locale from session first
        $locale = session('locale');

        if (!$locale) {
            // If no session locale, try to detect from browser
            $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
            
            // If not supported locale, fallback to default
            if (!in_array($locale, ['en', 'ro'])) {
                $locale = config('app.locale', 'ro');
            }
        }

        return redirect()->route('home', ['locale' => $locale]);
    }
}