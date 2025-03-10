<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Livewire\DezvoltareWeb;
use App\Livewire\Portofoliu;
use App\Livewire\Servicii;
use App\Livewire\Unsubscribe;
use App\Http\Controllers\SubscriberController;
use App\Livewire\Contact;
use Illuminate\Support\Facades\Route;

// Default redirect to user's preferred language
Route::get('/', [HomeController::class, 'index']);

// Language Switcher - Must be before localized routes
Route::get('/switch-language/{locale}', [LanguageController::class, 'switchLocale'])
    ->where('locale', 'en|ro');

// Localized Routes
Route::prefix('{locale}')
    ->middleware('setlocale')
    ->where(['locale' => 'en|ro'])
    ->group(function () {

        // Home page
        Route::get('/', function () {
            return view('welcome');
        })->name('home');

        // Main navigation routes
        Route::get('/web-development', DezvoltareWeb::class)->name('web-development');
        Route::get('/services', Servicii::class)->name('services');
        Route::get('/portfolio', Portofoliu::class)->name('portfolio');
        Route::get('/contact', Contact::class)->name('contact');
        Route::get('/unsubscribe/{token}', Unsubscribe::class)->name('unsubscribe');

        // Form submissions
        Route::post('/subscribers', [SubscriberController::class, 'store'])->name('subscribers.store');
    });
