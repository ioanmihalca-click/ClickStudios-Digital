<?php

namespace Tests\Feature;

use App\Models\PortfolioItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SeoTest extends TestCase
{
    use RefreshDatabase;

    public function test_pages_declare_their_language_versions(): void
    {
        $this->get('/en/services')
            ->assertOk()
            ->assertSee('<link rel="canonical" href="'.url('/en/services').'">', false)
            ->assertSee('<link rel="alternate" hreflang="ro" href="'.url('/ro/services').'">', false)
            ->assertSee('<link rel="alternate" hreflang="en" href="'.url('/en/services').'">', false)
            ->assertSee('<link rel="alternate" hreflang="x-default" href="'.url('/ro/services').'">', false)
            ->assertSee('<meta property="og:locale" content="en_US" />', false)
            ->assertSee('<meta property="og:locale:alternate" content="ro_RO" />', false);

        $this->get('/ro')
            ->assertSee('<link rel="alternate" hreflang="x-default" href="'.url('/').'">', false);
    }

    public function test_titles_and_descriptions_are_per_page_and_per_language(): void
    {
        $this->get('/ro/about')
            ->assertSee('<title>'.e(__('app.seo.about.title', [], 'ro')).'</title>', false)
            ->assertSee('<meta name="description" content="'.e(__('app.seo.about.description', [], 'ro')).'">', false);

        $this->get('/en/about')
            ->assertSee('<title>'.e(__('app.seo.about.title', [], 'en')).'</title>', false)
            ->assertSee('<meta property="og:title" content="'.e(__('app.seo.about.title', [], 'en')).'" />', false);

        $this->assertNotSame(__('app.seo.about.title', [], 'ro'), __('app.seo.about.title', [], 'en'));
    }

    public function test_project_pages_expose_their_own_metadata_and_structured_data(): void
    {
        PortfolioItem::factory()->create([
            'title' => 'SportClubPro',
            'slug' => 'sportclubpro',
            'short_description' => 'Management platform for sports clubs.',
            'image' => 'portfolio/sportclubpro.webp',
        ]);

        $html = $this->get('/en/portfolio/sportclubpro')
            ->assertOk()
            ->assertSee('<title>SportClubPro | Click Studios Digital</title>', false)
            ->assertSee('<meta name="description" content="Management platform for sports clubs.">', false)
            ->assertSee('<meta property="og:type" content="article" />', false)
            ->assertSee('/storage/portfolio/sportclubpro.webp', false)
            ->getContent();

        preg_match('~<script type="application/ld\+json">(.*?)</script>~s', $html, $matches);
        $graph = collect(json_decode($matches[1], true)['@graph']);

        $this->assertNotNull($graph->firstWhere('@type', 'WebSite'));
        $this->assertSame('SportClubPro', $graph->firstWhere('@type', 'CreativeWork')['name']);
        $this->assertCount(3, $graph->firstWhere('@type', 'BreadcrumbList')['itemListElement']);
    }

    public function test_the_sitemap_lists_every_page_and_project_with_language_alternates(): void
    {
        PortfolioItem::factory()->create(['slug' => 'sportclubpro']);
        PortfolioItem::factory()->inactive()->create(['slug' => 'secret-project']);

        $this->get('/sitemap.xml')
            ->assertOk()
            ->assertHeader('Content-Type', 'text/xml; charset=UTF-8')
            ->assertSee('<loc>'.url('/ro').'</loc>', false)
            ->assertSee('<loc>'.url('/en/about').'</loc>', false)
            ->assertSee('<loc>'.url('/ro/contact').'</loc>', false)
            ->assertSee('<loc>'.url('/en/portfolio/sportclubpro').'</loc>', false)
            ->assertSee('hreflang="ro" href="'.url('/ro/portfolio/sportclubpro').'"', false)
            ->assertDontSee('secret-project')
            ->assertDontSee('web-development');
    }
}
