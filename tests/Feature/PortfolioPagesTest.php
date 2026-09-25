<?php

namespace Tests\Feature;

use App\Models\PortfolioItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_portfolio_lists_active_items_and_links_to_their_pages(): void
    {
        $active = PortfolioItem::factory()->create(['title' => 'Active Project', 'slug' => 'active-project']);
        PortfolioItem::factory()->inactive()->create(['title' => 'Hidden Project', 'slug' => 'hidden-project']);

        $this->get('/en/portfolio')
            ->assertOk()
            ->assertSee('Active Project')
            ->assertSee(route('portfolio.show', ['locale' => 'en', 'portfolioItem' => $active->slug]), false)
            ->assertDontSee('Hidden Project');
    }

    public function test_the_project_page_renders_the_markdown_description_in_each_locale(): void
    {
        $item = PortfolioItem::factory()->create([
            'title' => 'SportClubPro',
            'slug' => 'sportclubpro',
            'category' => 'Sports club management SaaS',
            'category_ro' => 'SaaS pentru cluburi sportive',
            'description' => "## Context\n\nClubs used spreadsheets.\n\n## Key features\n\n- **Payments** – online fees",
            'description_ro' => "## Context\n\nCluburile foloseau foi de calcul.\n\n## Funcționalități cheie\n\n- **Plăți** – taxe online",
            'stack' => ['Laravel 12', 'Filament'],
            'year' => 2025,
        ]);

        $this->get("/en/portfolio/{$item->slug}")
            ->assertOk()
            ->assertSee('<h1', false)
            ->assertSee('<h2>Key features</h2>', false)
            ->assertSee('<li><strong>Payments</strong> – online fees</li>', false)
            ->assertSee('Sports club management SaaS')
            ->assertSee('Laravel 12')
            ->assertSee('2025');

        $this->get("/ro/portfolio/{$item->slug}")
            ->assertOk()
            ->assertSee('<h2>Funcționalități cheie</h2>', false)
            ->assertSee('SaaS pentru cluburi sportive')
            ->assertDontSee('Clubs used spreadsheets.');
    }

    public function test_items_created_before_markdown_import_still_render(): void
    {
        $item = PortfolioItem::factory()->legacy()->create(['description' => "First paragraph.\n\nSecond paragraph."]);

        $this->get("/ro/portfolio/{$item->slug}")
            ->assertOk()
            ->assertSee('<p>First paragraph.</p>', false)
            ->assertSee('<p>Second paragraph.</p>', false);

        $this->get('/ro/portfolio')->assertOk()->assertSee($item->title);
    }

    public function test_inactive_and_unknown_projects_are_not_found(): void
    {
        $hidden = PortfolioItem::factory()->inactive()->create();

        $this->get("/en/portfolio/{$hidden->slug}")->assertNotFound();
        $this->get('/en/portfolio/does-not-exist')->assertNotFound();
    }

    public function test_the_language_switcher_keeps_the_project_slug(): void
    {
        $item = PortfolioItem::factory()->create(['slug' => 'clipcraft-ro']);

        $this->get('/ro/portfolio/clipcraft-ro')
            ->assertOk()
            ->assertSee('href="'.url('/en/portfolio/clipcraft-ro').'"', false);
    }

    public function test_the_project_page_links_to_the_previous_and_next_projects(): void
    {
        $first = PortfolioItem::factory()->create(['title' => 'First', 'slug' => 'first', 'sort_order' => 1]);
        $second = PortfolioItem::factory()->create(['title' => 'Second', 'slug' => 'second', 'sort_order' => 2]);
        $third = PortfolioItem::factory()->create(['title' => 'Third', 'slug' => 'third', 'sort_order' => 3]);

        $this->get('/en/portfolio/second')
            ->assertOk()
            ->assertSee(url('/en/portfolio/first'), false)
            ->assertSee(url('/en/portfolio/third'), false)
            ->assertSee('02 / 03');
    }

    public function test_the_homepage_shows_projects_in_the_systems_panel_and_featured_cards(): void
    {
        PortfolioItem::factory()->featured()->create(['title' => 'Featured One', 'category' => 'AI platform']);
        PortfolioItem::factory()->create(['title' => 'Offline One', 'status' => 'in-development', 'website_url' => null]);

        $this->get('/en')
            ->assertOk()
            ->assertSee('Featured One')
            ->assertSee('AI platform')
            ->assertSee('Offline One')
            ->assertSee('1 online');
    }

    public function test_public_pages_render_without_raw_translation_keys(): void
    {
        $item = PortfolioItem::factory()->create();

        foreach (['ro', 'en'] as $locale) {
            foreach (['', '/services', '/portfolio', '/about', '/contact', "/portfolio/{$item->slug}"] as $path) {
                $html = $this->get("/$locale$path")->assertOk()->getContent();

                $this->assertDoesNotMatchRegularExpression('/\b(messages|app)\.[a-z_-]+\.[a-z_-]+/', $html, "Raw key on /$locale$path");
            }
        }
    }
}
