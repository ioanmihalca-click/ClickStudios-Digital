<?php

use App\Http\Middleware\NegotiateMarkdown;
use App\Http\Middleware\SetLocale;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Register middleware groups
        // $middleware->web(\App\Http\Middleware\EncryptCookies::class);
        $middleware->web(AddQueuedCookiesToResponse::class);
        $middleware->web(StartSession::class);
        $middleware->web(ShareErrorsFromSession::class);
        $middleware->web(VerifyCsrfToken::class);
        $middleware->web(SubstituteBindings::class);

        $middleware->alias([
            'setlocale' => SetLocale::class,
            'markdown.negotiate' => NegotiateMarkdown::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
