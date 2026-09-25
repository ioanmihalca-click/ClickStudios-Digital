{{-- llms.txt, per https://llmstxt.org: H1, summary blockquote, notes, then H2 link lists. --}}
# {!! config('site.business.name') !!}

> {!! __('app.markdown.summary', [], 'en') !!}

The site is bilingual: Romanian under `/ro` and English under `/en`. Every page is also available as Markdown, either by appending `.md` to its path (the home page is `/{locale}/index.md`) or by requesting the normal URL with `Accept: text/markdown`.

@foreach (['en', 'ro'] as $locale)
## {!! __('app.markdown.pages', [], $locale) !!} ({{ strtoupper($locale) }})

@foreach (config('site.pages') as $page)
- [{!! __("messages.menu.$page", [], $locale) !!}]({!! route("$page.markdown", ['locale' => $locale]) !!}): {!! __("app.seo.$page.description", [], $locale) !!}
@endforeach

## {!! __('app.markdown.projects', [], $locale) !!} ({{ strtoupper($locale) }})

@foreach ($projects as $project)
- [{!! $project->getLocalizedTitle($locale) !!}]({!! route('portfolio.show.markdown', ['locale' => $locale, 'portfolioItem' => $project->slug]) !!}): {!! $project->getLocalizedShortDescription($locale) !!}
@endforeach

@endforeach
## Optional

- [Sitemap]({!! route('sitemap') !!}): every public URL with its language alternates
