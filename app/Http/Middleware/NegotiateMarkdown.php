<?php

namespace App\Http\Middleware;

use App\Http\Controllers\MarkdownController;
use App\Models\PortfolioItem;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Content negotiation for AI agents: a request that prefers `text/markdown`
 * over `text/html` gets the Markdown version of the same page. HTML responses
 * advertise that version with a `Link` header.
 */
class NegotiateMarkdown
{
    /**
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $route = $request->route();
        $markdownRouteName = $route->getName().'.markdown';

        if (! Route::has($markdownRouteName)) {
            return $next($request);
        }

        if ($request->prefers(['text/html', 'text/markdown']) === 'text/markdown') {
            return $this->markdownFor($route->getName(), $route->parameters());
        }

        $response = $next($request);

        $response->headers->set('Vary', 'Accept', false);
        $response->headers->set(
            'Link',
            '<'.route($markdownRouteName, $route->parameters()).'>; rel="alternate"; type="text/markdown"',
            false,
        );

        return $response;
    }

    /**
     * @param  array<string, mixed>  $parameters
     */
    private function markdownFor(string $routeName, array $parameters): Response
    {
        $markdownController = app(MarkdownController::class);

        if ($routeName === 'portfolio.show') {
            $portfolioItem = $parameters['portfolioItem'] instanceof PortfolioItem
                ? $parameters['portfolioItem']
                : PortfolioItem::where('slug', $parameters['portfolioItem'])->firstOrFail();

            return $markdownController->portfolioItem($parameters['locale'], $portfolioItem);
        }

        return $markdownController->page($parameters['locale'], $routeName);
    }
}
