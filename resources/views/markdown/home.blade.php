@php
    $locale = App::getLocale();
@endphp
# {!! __('messages.brand') !!}

> {!! __('app.markdown.summary') !!}

{!! __('messages.hero.title') !!} {!! __('messages.hero.title-gradient') !!}. {!! __('messages.hero.subtitle') !!}

@foreach (['laravel', 'ai', 'partnership'] as $credential)
- **{!! __("messages.hero.credentials.$credential.title") !!}**: {!! __("messages.hero.credentials.$credential.note") !!}
@endforeach

## {!! __('messages.menu.portfolio') !!}

@foreach ($projects as $project)
- [{!! $project->getLocalizedTitle() !!}]({!! route('portfolio.show.markdown', ['locale' => $locale, 'portfolioItem' => $project->slug]) !!}): {!! $project->getLocalizedShortDescription() !!}
@endforeach

## {!! __('messages.menu.services') !!}

@foreach (['infrastructure', 'ai', 'ui_ux', 'ecommerce', 'maintenance'] as $serviceKey)
- **{!! __("messages.services.categories.$serviceKey.title") !!}**: {!! __("messages.services.categories.$serviceKey.description") !!}
@endforeach

{!! __('messages.menu.services') !!}: {!! route('services.markdown', ['locale' => $locale]) !!}

## {!! __('messages.services.cta.title') !!}

{!! __('messages.services.cta.subtitle') !!} {!! route('contact.markdown', ['locale' => $locale]) !!}

@include('markdown.partials.footer', ['htmlRoute' => 'home', 'markdownRoute' => 'home.markdown', 'parameters' => []])
