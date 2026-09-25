<?php

namespace Tests\Feature;

use App\Models\PortfolioItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MarkdownForAgentsTest extends TestCase
{
    use RefreshDatabase;

    public function test_every_page_has_a_markdown_version(): void
    {
        foreach (['ro', 'en'] as $locale) {
            foreach (['index', 'services', 'portfolio', 'about', 'contact'] as $page) {
                $response = $this->get("/$locale/$page.md");

                $response->assertOk()->assertHeader('Content-Type', 'text/markdown; charset=UTF-8');
                $this->assertStringStartsWith('# ', $response->getContent(), "/$locale/$page.md");
                $this->assertStringNotContainsString('&amp;', $response->getContent());
                $this->assertStringNotContainsString('<', strtok($response->getContent(), "\n"));
            }
        }
    }

    public function test_the_project_markdown_contains_the_raw_description_and_the_facts(): void
    {
        $item = PortfolioItem::factory()->create([
            'title' => 'SportClubPro',
            'slug' => 'sportclubpro',
            'description' => "## Context\n\nClubs used spreadsheets & paper.",
            'stack' => ['Laravel 12', 'Filament'],
            'year' => 2025,
        ]);

        $this->get('/en/portfolio/sportclubpro.md')
            ->assertOk()
            ->assertHeader('Content-Type', 'text/markdown; charset=UTF-8')
            ->assertHeader('Link', '<'.url('/en/portfolio/sportclubpro').'>; rel="canonical"')
            ->assertSee('# SportClubPro', false)
            ->assertSee("## Context\n\nClubs used spreadsheets & paper.", false)
            ->assertSee('**Stack**: Laravel 12, Filament', false)
            ->assertSee(url('/ro/portfolio/sportclubpro.md'), false);

        $item->update(['is_active' => false]);

        $this->get('/en/portfolio/sportclubpro.md')->assertNotFound();
    }

    public function test_agents_asking_for_markdown_get_it_on_the_normal_url(): void
    {
        PortfolioItem::factory()->create(['title' => 'SportClubPro', 'slug' => 'sportclubpro']);

        $this->get('/en/portfolio/sportclubpro', ['Accept' => 'text/markdown, text/html;q=0.8'])
            ->assertOk()
            ->assertHeader('Content-Type', 'text/markdown; charset=UTF-8')
            ->assertHeader('Vary', 'Accept')
            ->assertSee('# SportClubPro', false);

        $this->get('/ro/services', ['Accept' => 'text/markdown'])
            ->assertOk()
            ->assertHeader('Content-Type', 'text/markdown; charset=UTF-8');
    }

    public function test_browsers_get_html_that_advertises_the_markdown_version(): void
    {
        $response = $this->get('/en/services', ['Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8']);

        $response->assertOk()
            ->assertHeader('Content-Type', 'text/html; charset=utf-8')
            ->assertSee('<link rel="alternate" type="text/markdown" href="'.url('/en/services.md').'">', false);

        $this->assertStringContainsString('Accept', $response->headers->get('Vary'));
        $this->assertStringContainsString('<'.url('/en/services.md').'>; rel="alternate"; type="text/markdown"', $response->headers->get('Link'));
    }

    public function test_llms_txt_indexes_pages_and_projects_in_both_languages(): void
    {
        PortfolioItem::factory()->create(['title' => 'SportClubPro', 'slug' => 'sportclubpro', 'short_description_ro' => 'Platformă pentru cluburi.']);
        PortfolioItem::factory()->inactive()->create(['title' => 'Secret Project']);

        $response = $this->get('/llms.txt');

        $response->assertOk()->assertHeader('Content-Type', 'text/plain; charset=UTF-8');
        $this->assertStringStartsWith('# Click Studios Digital', $response->getContent());

        $response->assertSee('> Web development and applied AI studio', false)
            ->assertSee('('.url('/en/services.md').')', false)
            ->assertSee('('.url('/ro/index.md').')', false)
            ->assertSee('[SportClubPro]('.url('/en/portfolio/sportclubpro.md').')', false)
            ->assertSee('Platformă pentru cluburi.', false)
            ->assertDontSee('Secret Project');
    }
}
