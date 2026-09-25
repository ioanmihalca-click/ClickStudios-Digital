<?php

namespace Tests\Feature;

use App\Helpers\PortfolioMarkdown;
use App\Models\PortfolioItem;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\ValidationException;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PortfolioMarkdownTest extends TestCase
{
    private function fixture(): string
    {
        return file_get_contents(base_path('tests/Fixtures/portfolio.md'));
    }

    public function test_it_maps_a_valid_file_to_portfolio_attributes(): void
    {
        $attributes = PortfolioMarkdown::parse($this->fixture());

        $this->assertSame('SportClubPro', $attributes['title']);
        $this->assertSame('SportClubPro', $attributes['title_ro']);
        $this->assertSame('sportclubpro', $attributes['slug']);
        $this->assertSame('live', $attributes['status']);
        $this->assertSame(2025, $attributes['year']);
        $this->assertSame(['Laravel 12', 'Livewire', 'Filament', 'MySQL', '8'], $attributes['stack']);
        $this->assertSame('Sports club management SaaS', $attributes['category']);
        $this->assertSame('SaaS pentru cluburi sportive', $attributes['category_ro']);
        $this->assertStringStartsWith('A management platform', $attributes['short_description']);
        $this->assertStringStartsWith('O platformă de management', $attributes['short_description_ro']);
        $this->assertSame('https://sportclubpro.ro', $attributes['website_url']);
        $this->assertSame('https://www.youtube.com/watch?v=hOWXVMlZwPo', $attributes['youtube_url']);
        $this->assertStringStartsWith('## Context', $attributes['description']);
        $this->assertStringContainsString('- Attendance tracking', $attributes['description']);
        $this->assertStringContainsString('## Funcționalități cheie', $attributes['description_ro']);
        $this->assertStringNotContainsString('Club administrators', $attributes['description_ro']);
    }

    public function test_it_drops_the_title_heading_and_demotes_other_h1_headings(): void
    {
        $markdown = str_replace('## Key features', "# Key features\n\n```bash\n# keep this comment\n```", $this->fixture());

        $description = PortfolioMarkdown::parse($markdown)['description'];

        $this->assertStringNotContainsString('# SportClubPro', $description);
        $this->assertStringContainsString("\n## Key features", $description);
        $this->assertStringContainsString("\n# keep this comment", $description);
    }

    public function test_it_accepts_windows_line_endings_a_bom_and_loose_markers(): void
    {
        $markdown = "\xEF\xBB\xBF".str_replace(['<!-- en -->', '<!-- ro -->'], ['<!--EN-->', '  <!--  ro  -->'], $this->fixture());
        $markdown = str_replace("\n", "\r\n", $markdown);

        $attributes = PortfolioMarkdown::parse($markdown);

        $this->assertSame('SportClubPro', $attributes['title']);
        $this->assertStringStartsWith('## Context', $attributes['description_ro']);
    }

    public function test_language_specific_titles_override_the_shared_title(): void
    {
        $markdown = str_replace("ro:\n  category:", "ro:\n  title: SportClubPro România\n  category:", $this->fixture());

        $attributes = PortfolioMarkdown::parse($markdown);

        $this->assertSame('SportClubPro', $attributes['title']);
        $this->assertSame('SportClubPro România', $attributes['title_ro']);
        $this->assertSame('sportclubpro', $attributes['slug']);
    }

    /**
     * @return array<string, array{0: callable(string): string, 1: string}>
     */
    public static function invalidFiles(): array
    {
        return [
            'no front matter' => [fn (string $markdown): string => preg_replace('/\A---.*?---\n/s', '', $markdown), 'front_matter'],
            'broken yaml' => [fn (string $markdown): string => str_replace('year: 2025', "year: [2025\n", $markdown), 'front_matter'],
            'unknown status' => [fn (string $markdown): string => str_replace('status: live', 'status: shipped', $markdown), 'status'],
            'missing romanian body' => [fn (string $markdown): string => substr($markdown, 0, strpos($markdown, '<!-- ro -->')), 'body.ro'],
            'missing romanian summary' => [fn (string $markdown): string => preg_replace('/^  summary: O platformă.*$/m', '', $markdown), 'ro.summary'],
            'empty stack' => [fn (string $markdown): string => preg_replace('/^stack: .*$/m', 'stack: []', $markdown), 'stack'],
            'video outside youtube' => [fn (string $markdown): string => preg_replace('/^video: .*$/m', 'video: https://vimeo.com/123', $markdown), 'video'],
            'year in the far future' => [fn (string $markdown): string => str_replace('year: 2025', 'year: 2999', $markdown), 'year'],
        ];
    }

    #[DataProvider('invalidFiles')]
    public function test_it_rejects_invalid_files(callable $breakFile, string $expectedErrorKey): void
    {
        try {
            PortfolioMarkdown::parse($breakFile($this->fixture()));
            $this->fail('Expected a ValidationException.');
        } catch (ValidationException $exception) {
            $this->assertArrayHasKey($expectedErrorKey, $exception->errors());
            $this->assertStringNotContainsString('validation.', $exception->errors()[$expectedErrorKey][0]);
        }
    }

    public function test_rendered_descriptions_strip_raw_html_and_unsafe_links(): void
    {
        $item = new PortfolioItem([
            'description' => "## Context\n\n<script>alert(1)</script>\n\n[click](javascript:alert(1))",
        ]);
        App::setLocale('en');

        $html = (string) $item->getLocalizedDescriptionHtml();

        $this->assertStringContainsString('<h2>Context</h2>', $html);
        $this->assertStringNotContainsString('<script>', $html);
        $this->assertStringNotContainsString('javascript:', $html);
    }
}
