<?php

namespace App\Providers;

use App\Helpers\LocaleHelper;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(LocaleHelper::class, function ($app) {
            return new LocaleHelper();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Set default locale if session has it
        if (session()->has('locale')) {
            app()->setLocale(session()->get('locale'));
        }
    }
}
