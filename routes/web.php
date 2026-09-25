<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MarkdownController;
use App\Http\Controllers\SitemapController;
use App\Livewire\Contact;
use App\Livewire\Despre;
use App\Livewire\Homepage;
use App\Livewire\Portofoliu;
use App\Livewire\PortofoliuProiect;
use App\Livewire\Servicii;
use Illuminate\Support\Facades\Route;

// Default redirect to user's preferred language
Route::get('/', [HomeController::class, 'index']);

Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');
Route::get('/llms.txt', [MarkdownController::class, 'llms'])->name('llms');

// Language Switcher - Must be before localized routes
Route::get('/switch-language/{locale}', [LanguageController::class, 'switchLocale'])
    ->where('locale', 'en|ro');

// Localized Routes
Route::prefix('{locale}')
    ->middleware('setlocale')
    ->where(['locale' => 'en|ro'])
    ->group(function () {

        // Markdown versions for AI agents. Registered before the HTML routes so
        // `/portfolio/{slug}.md` is not swallowed by `/portfolio/{slug}`.
        Route::get('/index.md', [MarkdownController::class, 'page'])->defaults('page', 'home')->name('home.markdown');
        Route::get('/services.md', [MarkdownController::class, 'page'])->defaults('page', 'services')->name('services.markdown');
        Route::get('/portfolio.md', [MarkdownController::class, 'page'])->defaults('page', 'portfolio')->name('portfolio.markdown');
        Route::get('/about.md', [MarkdownController::class, 'page'])->defaults('page', 'about')->name('about.markdown');
        Route::get('/contact.md', [MarkdownController::class, 'page'])->defaults('page', 'contact')->name('contact.markdown');
        Route::get('/portfolio/{portfolioItem:slug}.md', [MarkdownController::class, 'portfolioItem'])->name('portfolio.show.markdown');

        Route::middleware('markdown.negotiate')->group(function () {
            // Home page
            Route::livewire('/', Homepage::class)->name('home');

            // Main navigation routes
            Route::livewire('/about', Despre::class)->name('about');
            Route::livewire('/services', Servicii::class)->name('services');
            Route::livewire('/portfolio', Portofoliu::class)->name('portfolio');
            Route::livewire('/portfolio/{portfolioItem:slug}', PortofoliuProiect::class)->name('portfolio.show');
            Route::livewire('/contact', Contact::class)->name('contact');
        });
    });
