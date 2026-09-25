@php
    $locale = App::getLocale();
@endphp
# {!! __('messages.menu.portfolio') !!}

> {!! __('messages.portfolio.statement') !!} {!! __('messages.portfolio.statement_highlight') !!} {!! __('messages.portfolio.subtitle') !!}

@foreach ($projects as $project)
## [{!! $project->getLocalizedTitle() !!}]({!! route('portfolio.show.markdown', ['locale' => $locale, 'portfolioItem' => $project->slug]) !!})

{!! $project->getLocalizedShortDescription() !!}

@if ($project->getLocalizedCategory())
- **{!! __('messages.portfolio.fields.category') !!}**: {!! $project->getLocalizedCategory() !!}
@endif
@if ($project->status)
- **{!! __('messages.portfolio.fields.status') !!}**: {!! $project->status->label() !!}
@endif
@if ($project->stack)
- **{!! __('messages.portfolio.fields.stack') !!}**: {!! implode(', ', $project->stack) !!}
@endif

@endforeach
@include('markdown.partials.footer', ['htmlRoute' => 'portfolio', 'markdownRoute' => 'portfolio.markdown', 'parameters' => []])
