<?php

namespace Tests\Feature;

use App\Enums\PortfolioStatus;
use App\Filament\Resources\PortfolioItems\Pages\CreatePortfolioItem;
use App\Filament\Resources\PortfolioItems\Pages\EditPortfolioItem;
use App\Filament\Resources\PortfolioItems\Pages\ListPortfolioItems;
use App\Models\PortfolioItem;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class PortfolioItemMarkdownUploadTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake('local');
        $this->actingAs(User::factory()->create(['email' => 'ioanclickmihalca@gmail.com']));
    }

    private function markdownFile(?string $content = null): UploadedFile
    {
        return UploadedFile::fake()->createWithContent(
            'PORTFOLIO.md',
            $content ?? file_get_contents(base_path('tests/Fixtures/portfolio.md')),
        );
    }

    public function test_uploading_a_markdown_file_fills_the_form_and_creates_the_item(): void
    {
        Livewire::test(CreatePortfolioItem::class)
            ->fillForm(['markdown_path' => $this->markdownFile()])
            ->assertSchemaStateSet([
                'title' => 'SportClubPro',
                'slug' => 'sportclubpro',
                'category_ro' => 'SaaS pentru cluburi sportive',
                'status' => 'live',
                'year' => 2025,
                'website_url' => 'https://sportclubpro.ro',
            ])
            ->assertNotified('Câmpurile au fost completate din PORTFOLIO.md')
            ->call('create')
            ->assertHasNoFormErrors();

        $item = PortfolioItem::firstWhere('slug', 'sportclubpro');

        $this->assertNotNull($item);
        $this->assertSame(PortfolioStatus::Live, $item->status);
        $this->assertSame(['Laravel 12', 'Livewire', 'Filament', 'MySQL', '8'], $item->stack);
        $this->assertStringStartsWith('## Context', $item->description);
        $this->assertStringContainsString('Funcționalități cheie', $item->description_ro);
        Storage::disk('local')->assertExists($item->markdown_path);
    }

    public function test_an_invalid_file_is_rejected_and_not_kept(): void
    {
        Livewire::test(CreatePortfolioItem::class)
            ->fillForm(['markdown_path' => $this->markdownFile("# Just a heading\n\nNo front matter.")])
            ->assertNotified('Fișierul nu poate fi importat')
            ->assertSchemaStateSet(['markdown_path' => null, 'title' => null]);
    }

    public function test_reimporting_on_edit_keeps_the_existing_slug(): void
    {
        $item = PortfolioItem::factory()->legacy()->create(['title' => 'Old Name', 'slug' => 'old-name']);

        Livewire::test(EditPortfolioItem::class, ['record' => $item->getRouteKey()])
            ->fillForm(['markdown_path' => $this->markdownFile()])
            ->assertSchemaStateSet(['title' => 'SportClubPro', 'slug' => 'old-name'])
            ->call('save')
            ->assertHasNoFormErrors();

        $this->assertSame('old-name', $item->fresh()->slug);
        $this->assertSame(2025, $item->fresh()->year);
    }

    public function test_the_list_page_offers_the_llm_prompt(): void
    {
        Livewire::test(ListPortfolioItems::class)
            ->assertActionExists('llmPrompt')
            ->mountAction('llmPrompt')
            ->assertActionMounted('llmPrompt');

        $this->view('filament.portfolio-llm-prompt', ['prompt' => file_get_contents(resource_path('prompts/portfolio.md'))])
            ->assertSee('Task: write PORTFOLIO.md for this project')
            ->assertSee('<!-- ro -->');
    }
}
