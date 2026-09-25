@php
    $business = config('site.business');
    $otherLocale = App::getLocale() === 'ro' ? 'en' : 'ro';
@endphp

---

{!! $business['name'] !!} · {!! $business['locality'] !!}, {!! __('app.markdown.country') !!} · {!! $business['email'] !!} · {!! $business['phone_display'] !!}

- {!! __('app.markdown.html_version') !!}: {!! route($htmlRoute, [...$parameters, 'locale' => App::getLocale()]) !!}
- {!! __('app.markdown.other_language') !!}: {!! route($markdownRoute, [...$parameters, 'locale' => $otherLocale]) !!}
- llms.txt: {!! route('llms') !!}
