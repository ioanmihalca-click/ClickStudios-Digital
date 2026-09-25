@php
    $locale = App::getLocale();
    $business = config('site.business');
    $localizedUrls = \App\Helpers\LocaleHelper::getLocalizedUrls();
    $markdownUrl = \App\Helpers\LocaleHelper::getMarkdownUrl();

    $pageTitle = $title ?? __('app.title');
    $pageDescription = $description ?? __('app.meta_description');
    $pageOgImage = $ogImage ?? null;
    $ogLocales = ['ro' => 'ro_RO', 'en' => 'en_US'];

    $pages = config('site.pages');
    $currentPageIndex = array_search(Route::currentRouteName(), $pages, true);
    $nextPage = $currentPageIndex === false ? null : $pages[($currentPageIndex + 1) % count($pages)];

    $serviceOffers = [];
    foreach (['infrastructure', 'ai', 'ui_ux', 'ecommerce', 'maintenance'] as $serviceKey) {
        $serviceOffers[] = [
            '@type' => 'Offer',
            'itemOffered' => [
                '@type' => 'Service',
                'name' => __("messages.services.categories.$serviceKey.title"),
                'description' => __("messages.services.categories.$serviceKey.description"),
            ],
        ];
    }

    $structuredData = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => ['ProfessionalService', 'Organization'],
                '@id' => url('/') . '#organization',
                'name' => $business['name'],
                'description' => __('app.schema.description'),
                'url' => url('/'),
                'logo' => ['@type' => 'ImageObject', 'url' => asset('assets/logo.jpg')],
                'image' => asset('assets/logo.jpg'),
                'telephone' => $business['phone'],
                'email' => $business['email'],
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => $business['street'],
                    'addressLocality' => $business['locality'],
                    'addressRegion' => $business['region'],
                    'postalCode' => $business['postal_code'],
                    'addressCountry' => $business['country'],
                ],
                'geo' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => $business['latitude'],
                    'longitude' => $business['longitude'],
                ],
                'openingHours' => ['Mo-Fr 09:00-17:00'],
                'areaServed' => ['@type' => 'Country', 'name' => 'Romania'],
                'knowsAbout' => ['Laravel', 'Artificial Intelligence', 'Web Development', 'Software Architecture'],
                'hasOfferCatalog' => [
                    '@type' => 'OfferCatalog',
                    'name' => __('messages.menu.services'),
                    'itemListElement' => $serviceOffers,
                ],
                'sameAs' => array_values($business['social']),
            ],
            [
                '@type' => 'WebSite',
                '@id' => url('/') . '#website',
                'name' => $business['name'],
                'url' => url('/'),
                'inLanguage' => ['ro', 'en'],
                'publisher' => ['@id' => url('/') . '#organization'],
            ],
            ...array_map(fn (array $node): array => array_filter($node, fn (mixed $value): bool => $value !== null), $jsonLd ?? []),
        ],
    ];
@endphp
<!DOCTYPE html>
<html class="scroll-smooth overscroll-none" lang="{{ str_replace('_', '-', $locale) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="theme-color" content="#fafaf8">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Language versions --}}
    @foreach ($localizedUrls as $alternateLocale => $alternateUrl)
        <link rel="alternate" hreflang="{{ $alternateLocale }}" href="{{ $alternateUrl }}">
    @endforeach
    @if ($localizedUrls)
        @php
            $defaultLanguageUrl = Route::currentRouteName() === 'home' ? url('/') : $localizedUrls[config('app.fallback_locale')];
        @endphp
        <link rel="alternate" hreflang="x-default" href="{{ $defaultLanguageUrl }}">
    @endif

    {{-- Markdown for agents: same page as text/markdown --}}
    @if ($markdownUrl)
        <link rel="alternate" type="text/markdown" href="{{ $markdownUrl }}">
    @endif

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="ClickStudiosDigital" />

    <link rel="preload" href="/fonts/jetbrains-mono/jetbrains-mono-latin.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Open Graph -->
    <meta property="og:title" content="{{ $pageTitle }}" />
    <meta property="og:description" content="{{ $pageDescription }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="{{ $ogType ?? 'website' }}" />
    <meta property="og:site_name" content="{{ $business['name'] }}" />
    <meta property="og:locale" content="{{ $ogLocales[$locale] }}" />
    @foreach ($ogLocales as $ogLocale => $ogLocaleCode)
        @if ($ogLocale !== $locale)
            <meta property="og:locale:alternate" content="{{ $ogLocaleCode }}" />
        @endif
    @endforeach
    @if ($pageOgImage)
        <meta property="og:image" content="{{ $pageOgImage }}" />
        <meta property="og:image:alt" content="{{ $pageTitle }}" />
    @else
        <meta property="og:image" content="{{ asset('assets/OG-Click-Studios-Digital.webp') }}" />
        <meta property="og:image:type" content="image/webp">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:alt" content="{{ __('app.og_image_alt') }}" />
    @endif
    <meta name="twitter:card" content="summary_large_image" />

    <script type="application/ld+json">{!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QFL38JS6PJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-QFL38JS6PJ');
    </script>

</head>

<body class="flex flex-col min-h-screen bg-canvas bg-grid font-inter text-gray-900 overflow-x-hidden antialiased"
    x-data="{ scrollToTop: false }" x-on:scroll.window="scrollToTop = window.scrollY > 100">

    <a href="#main-content"
        class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[100] focus:bg-white focus:px-4 focus:py-2 focus:border focus:border-night focus:rounded-[4px] focus:font-mono focus:text-[13px] focus:font-bold focus:text-emerald-700">
        {{ __('app.skip_to_content') }}
    </a>

    <x-navigation-main />

    <main id="main-content" class="relative z-10 flex-1 w-full">
        {{ $slot }}
    </main>

    <footer class="relative z-30 w-full border-t border-rule bg-canvas">
        <div class="max-w-[1280px] mx-auto px-6 md:px-12">
            @if ($nextPage)
                <a href="{{ route($nextPage, ['locale' => $locale]) }}" wire:navigate
                    class="group flex items-center justify-between gap-4 py-6 border-b border-rule font-mono text-[11px] tracking-[0.16em] uppercase text-gray-500">
                    <span>@clickstudiosdigital</span>
                    <span class="flex items-center gap-2 text-gray-900 transition-colors group-hover:text-emerald-700">
                        {{ __('app.next_page') }}: {{ __("messages.menu.$nextPage") }}
                        <x-arrow class="transition-transform group-hover:translate-x-0.5" />
                    </span>
                </a>
            @endif

            <div class="flex flex-wrap items-center justify-between gap-4 py-4 text-xs text-gray-500">
                <span>&copy; {{ date('Y') }} {{ $business['name'] }} &middot; {{ $business['locality'] }}</span>
                <span class="flex flex-wrap gap-[18px]">
                    @foreach ($business['social'] as $network => $profileUrl)
                        <a href="{{ $profileUrl }}" target="_blank" rel="noopener noreferrer"
                            class="text-gray-500 transition-colors hover:text-gray-900">{{ $network }}</a>
                    @endforeach
                    <a href="mailto:{{ $business['email'] }}"
                        class="text-emerald-700 transition-colors hover:text-emerald-800">{{ $business['email'] }}</a>
                </span>
            </div>
        </div>
    </footer>

    <button x-show="scrollToTop" x-cloak @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        aria-label="{{ __('app.scroll_to_top') }}"
        class="fixed bottom-4 right-4 z-50 flex items-center justify-center w-11 h-11 rounded-[4px] bg-night text-emerald-50 shadow-[2px_2px_0_#059669] transition-all duration-[120ms] hover:shadow-[1px_1px_0_#059669] hover:translate-x-px hover:translate-y-px">
        <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.6"
            stroke-linecap="square" aria-hidden="true">
            <path d="M8 14V3M4 7l4-4 4 4" />
        </svg>
    </button>

</body>

</html>
