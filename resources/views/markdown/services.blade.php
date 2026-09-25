# {!! __('messages.services.hero.title_accent') !!} {!! __('messages.services.hero.title') !!}

> {!! __('messages.services.hero.subtitle') !!}

@foreach (['infrastructure', 'ai', 'ui_ux', 'ecommerce', 'maintenance'] as $serviceKey)
## {{ sprintf('%02d', $loop->iteration) }}. {!! __("messages.services.categories.$serviceKey.title") !!}

{!! __("messages.services.categories.$serviceKey.description") !!}

{!! __('messages.services.delivery_label') !!} {!! implode(', ', __("messages.services.categories.$serviceKey.delivery")) !!}

@endforeach
## {!! __('messages.services.cta.title') !!}

{!! __('messages.services.cta.subtitle') !!} {!! route('contact.markdown', ['locale' => App::getLocale()]) !!}

@include('markdown.partials.footer', ['htmlRoute' => 'services', 'markdownRoute' => 'services.markdown', 'parameters' => []])
