<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use Illuminate\Http\Response;

/**
 * Markdown versions of the public pages, for AI agents ("Markdown for Agents").
 * Served at the `.md` URLs and, through NegotiateMarkdown, at the normal URLs
 * when the client prefers `Accept: text/markdown`.
 */
class MarkdownController extends Controller
{
    public function page(string $locale, string $page): Response
    {
        $data = in_array($page, ['home', 'portfolio'], true)
            ? ['projects' => PortfolioItem::query()->visible()->get()]
            : [];

        return $this->markdownResponse(
            view("markdown.$page", $data)->render(),
            route($page, ['locale' => $locale]),
        );
    }

    public function portfolioItem(string $locale, PortfolioItem $portfolioItem): Response
    {
        abort_unless($portfolioItem->is_active, 404);

        return $this->markdownResponse(
            view('markdown.portfolio-item', ['item' => $portfolioItem])->render(),
            route('portfolio.show', ['locale' => $locale, 'portfolioItem' => $portfolioItem->slug]),
        );
    }

    /**
     * Site index for LLMs, following https://llmstxt.org.
     */
    public function llms(): Response
    {
        $markdown = view('markdown.llms', [
            'projects' => PortfolioItem::query()->visible()->get(),
        ])->render();

        return response($this->tidy($markdown), 200, [
            'Content-Type' => 'text/plain; charset=UTF-8',
        ]);
    }

    private function markdownResponse(string $markdown, string $canonicalUrl): Response
    {
        $markdown = $this->tidy($markdown);

        return response($markdown, 200, [
            'Content-Type' => 'text/markdown; charset=UTF-8',
            'Vary' => 'Accept',
            'Link' => '<'.$canonicalUrl.'>; rel="canonical"',
            'X-Markdown-Tokens' => (string) (int) ceil(mb_strlen($markdown) / 4),
            'X-Content-Type-Options' => 'nosniff',
        ]);
    }

    /**
     * Blade leaves blank lines where directives were; collapse them.
     */
    private function tidy(string $markdown): string
    {
        return preg_replace("/\n{3,}/", "\n\n", trim($markdown))."\n";
    }
}
