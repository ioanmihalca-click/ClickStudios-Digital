<?php

namespace App\Helpers;

use App\Enums\PortfolioStatus;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;
use League\CommonMark\Extension\FrontMatter\Exception\InvalidFrontMatterException;
use League\CommonMark\Extension\FrontMatter\FrontMatterParser;

/**
 * Turns a bilingual PORTFOLIO.md (generated with resources/prompts/portfolio.md)
 * into PortfolioItem attributes.
 *
 * Expected shape: YAML front matter, then the English body after `<!-- en -->`
 * and the Romanian body after `<!-- ro -->`.
 */
class PortfolioMarkdown
{
    private const SECTION_MARKER = '/^[ \t]*<!--\s*(en|ro)\s*-->[ \t]*$/mi';

    /**
     * @return array{
     *     title: string,
     *     title_ro: string,
     *     slug: string,
     *     category: string,
     *     category_ro: string,
     *     status: string,
     *     year: int,
     *     stack: list<string>,
     *     short_description: string,
     *     short_description_ro: string,
     *     description: string,
     *     description_ro: string,
     *     website_url: string|null,
     *     youtube_url: string|null
     * }
     *
     * @throws ValidationException
     */
    public static function parse(string $markdown): array
    {
        $markdown = preg_replace('/^\xEF\xBB\xBF/', '', $markdown);
        $markdown = str_replace(["\r\n", "\r"], "\n", $markdown);

        try {
            $document = (new FrontMatterParser(new SymfonyYamlFrontMatterParser))->parse($markdown);
        } catch (InvalidFrontMatterException $exception) {
            throw ValidationException::withMessages([
                'front_matter' => 'Front matter-ul YAML nu poate fi citit: '.$exception->getMessage(),
            ]);
        }

        $frontMatter = $document->getFrontMatter();

        if (! is_array($frontMatter)) {
            throw ValidationException::withMessages([
                'front_matter' => 'Fișierul trebuie să înceapă cu un bloc YAML între două linii ---.',
            ]);
        }

        if (isset($frontMatter['stack']) && is_array($frontMatter['stack'])) {
            $frontMatter['stack'] = array_values(array_map(
                fn (mixed $technology): mixed => is_scalar($technology) ? trim((string) $technology) : $technology,
                $frontMatter['stack'],
            ));
        }

        $data = [...$frontMatter, 'body' => self::splitSections($document->getContent())];

        Validator::make($data, [
            'title' => ['required', 'string', 'max:120'],
            'status' => ['required', Rule::enum(PortfolioStatus::class)],
            'year' => ['required', 'integer', 'between:2000,'.(now()->year + 1)],
            'url' => ['nullable', 'url:http,https'],
            'video' => ['nullable', 'url:http,https', 'regex:~^https?://(www\.|m\.)?(youtube\.com|youtu\.be)/~i'],
            'stack' => ['required', 'array', 'min:1', 'max:12'],
            'stack.*' => ['required', 'string', 'max:40'],
            'en' => ['required', 'array'],
            'ro' => ['required', 'array'],
            'en.title' => ['nullable', 'string', 'max:120'],
            'ro.title' => ['nullable', 'string', 'max:120'],
            'en.category' => ['required', 'string', 'max:80'],
            'ro.category' => ['required', 'string', 'max:80'],
            'en.summary' => ['required', 'string', 'max:400'],
            'ro.summary' => ['required', 'string', 'max:400'],
            'body.en' => ['required', 'string'],
            'body.ro' => ['required', 'string'],
        ], [
            'required' => 'Lipsește „:attribute”.',
            'string' => '„:attribute” trebuie să fie text.',
            'array' => '„:attribute” trebuie să fie o listă.',
            'integer' => '„:attribute” trebuie să fie un număr.',
            'between' => '„:attribute” trebuie să fie între :min și :max.',
            'min' => '„:attribute” trebuie să aibă cel puțin :min elemente.',
            'max' => '„:attribute” depășește limita de :max.',
            'url' => '„:attribute” trebuie să fie un URL http(s) valid.',
            'enum' => '„:attribute” trebuie să fie live, beta, in-development sau archived.',
            'video.regex' => '„video” trebuie să fie un link YouTube.',
            'body.en.required' => 'Lipsește textul în engleză: pune-l după o linie <!-- en -->.',
            'body.ro.required' => 'Lipsește textul în română: pune-l după o linie <!-- ro -->.',
        ], [
            'stack.*' => 'stack',
        ])->validate();

        $title = trim($data['title']);

        return [
            'title' => trim($data['en']['title'] ?? '') ?: $title,
            'title_ro' => trim($data['ro']['title'] ?? '') ?: $title,
            'slug' => Str::slug($title),
            'category' => trim($data['en']['category']),
            'category_ro' => trim($data['ro']['category']),
            'status' => $data['status'],
            'year' => (int) $data['year'],
            'stack' => $data['stack'],
            'short_description' => trim($data['en']['summary']),
            'short_description_ro' => trim($data['ro']['summary']),
            'description' => self::normalizeHeadings($data['body']['en'], $title),
            'description_ro' => self::normalizeHeadings($data['body']['ro'], $title),
            'website_url' => $data['url'] ?? null,
            'youtube_url' => $data['video'] ?? null,
        ];
    }

    /**
     * @return array{en?: string, ro?: string}
     */
    private static function splitSections(string $content): array
    {
        $parts = preg_split(self::SECTION_MARKER, $content, -1, PREG_SPLIT_DELIM_CAPTURE);
        $sections = [];

        // $parts = [preamble, lang, body, lang, body, ...]
        for ($index = 1; $index < count($parts); $index += 2) {
            $language = strtolower($parts[$index]);
            $sections[$language] = trim(($sections[$language] ?? '')."\n\n".$parts[$index + 1]);
        }

        return array_filter($sections, fn (string $body): bool => $body !== '');
    }

    /**
     * The page already renders the project title as its h1, so a leading
     * `# Title` is dropped and any other `# ` heading is demoted to `## `.
     * Lines inside fenced code blocks are left alone.
     */
    private static function normalizeHeadings(string $body, string $title): string
    {
        $body = preg_replace('/\A#[ \t]+'.preg_quote($title, '/').'[ \t]*#*[ \t]*\n+/iu', '', $body);

        $insideFence = false;
        $lines = explode("\n", $body);

        foreach ($lines as $index => $line) {
            if (preg_match('/^\s*(```|~~~)/', $line)) {
                $insideFence = ! $insideFence;

                continue;
            }

            if (! $insideFence && preg_match('/^#[ \t]+/', $line)) {
                $lines[$index] = '#'.$line;
            }
        }

        return trim(implode("\n", $lines));
    }
}
