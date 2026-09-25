# {!! $item->getLocalizedTitle() !!}

> {!! $item->getLocalizedShortDescription() !!}

@if ($item->getLocalizedCategory())
- **{!! __('messages.portfolio.fields.category') !!}**: {!! $item->getLocalizedCategory() !!}
@endif
@if ($item->status)
- **{!! __('messages.portfolio.fields.status') !!}**: {!! $item->status->label() !!}
@endif
@if ($item->year)
- **{!! __('messages.portfolio.fields.year') !!}**: {{ $item->year }}
@endif
@if ($item->stack)
- **{!! __('messages.portfolio.fields.stack') !!}**: {!! implode(', ', $item->stack) !!}
@endif
@if ($item->website_url)
- **{!! __('messages.portfolio.fields.link') !!}**: {!! $item->website_url !!}
@endif
@if ($item->youtube_url)
- **{!! __('messages.portfolio.video_preview') !!}**: {!! $item->youtube_url !!}
@endif

{!! $item->getLocalizedDescription() !!}

@include('markdown.partials.footer', [
    'htmlRoute' => 'portfolio.show',
    'markdownRoute' => 'portfolio.show.markdown',
    'parameters' => ['portfolioItem' => $item->slug],
])
