@php
    $business = config('site.business');
@endphp
# {!! __('messages.contact.title') !!} {!! __('messages.contact.title_gradient') !!}

{!! __('messages.contact.subtitle') !!}

## {!! __('messages.contact.info.title') !!}

- **{!! __('messages.contact.info.email') !!}**: {!! $business['email'] !!}
- **{!! __('messages.contact.info.phone') !!}**: {!! $business['phone_display'] !!}
- **{!! __('messages.contact.info.address') !!}**: {!! $business['street'] !!}, {!! $business['postal_code'] !!} {!! $business['locality'] !!}, {!! $business['region'] !!}, {!! __('app.markdown.country') !!}
- **{!! __('messages.contact.info.hours') !!}**: {!! __('messages.contact.info.hours_value') !!}

## {!! __('messages.contact.form.title') !!}

{!! route('contact', ['locale' => App::getLocale()]) !!}

@include('markdown.partials.footer', ['htmlRoute' => 'contact', 'markdownRoute' => 'contact.markdown', 'parameters' => []])
