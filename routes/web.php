<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Livewire\Contact;
use App\Livewire\Homepage;
use App\Livewire\Portofoliu;
use App\Livewire\Servicii;
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
        Route::livewire('/', Homepage::class)->name('home');

        // Main navigation routes
        Route::livewire('/services', Servicii::class)->name('services');
        Route::livewire('/portfolio', Portofoliu::class)->name('portfolio');
        Route::livewire('/contact', Contact::class)->name('contact');
    });
