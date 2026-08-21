@php
    $navLinks = [
        'home' => __('messages.menu.home'),
        'services' => __('messages.menu.services'),
        'portfolio' => __('messages.menu.portfolio'),
        'about' => __('messages.menu.about'),
    ];
@endphp

<nav x-cloak x-data="{ isOpen: false }"
    class="sticky top-0 z-50 w-full border-b border-rule bg-canvas/[0.92] backdrop-blur-[8px]">

    <div class="flex flex-wrap items-center justify-between gap-3 md:gap-6 px-6 md:px-12 py-[18px]">

        {{-- Wordmark --}}
        <a href="{{ route('home', ['locale' => App::getLocale()]) }}" wire:navigate
            class="font-jakarta text-[13px] md:text-base font-extrabold tracking-[0.04em] text-gray-900 hover:text-gray-900">
            CLICK STUDIOS<span class="text-emerald-600"> DIGITAL</span>
        </a>

        {{-- Desktop links --}}
        <div class="hidden lg:flex gap-7 text-[13.5px] font-medium">
            @foreach ($navLinks as $navRoute => $navLabel)
                <a href="{{ route($navRoute, ['locale' => App::getLocale()]) }}" wire:navigate
                    @class([
                        'transition-colors',
                        'text-gray-900 border-b-2 border-emerald-600 pb-[2px]' =>
                            Route::currentRouteName() === $navRoute,
                        'text-gray-600 hover:text-gray-900' => Route::currentRouteName() !== $navRoute,
                    ])>
                    {{ $navLabel }}
                </a>
            @endforeach
        </div>

        {{-- Right cluster --}}
        <div class="flex items-center gap-3">

            {{-- Language switcher --}}
            <div class="relative group">
                <button type="button" aria-label="{{ __('messages.language') }}"
                    class="flex items-center px-2 py-2 rounded-[4px] border border-rule bg-white text-gray-700 transition-colors hover:bg-row-hover">
                    @if (App::getLocale() === 'en')
                        <span class="inline-flex items-center justify-center w-5 h-5 overflow-hidden rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-full h-full">
                                <rect width="512" height="512" fill="#012169" />
                                <path d="M512 0L0 512" stroke="#fff" stroke-width="74" />
                                <path d="M0 0L512 512" stroke="#fff" stroke-width="74" />
                                <path d="M0 0L512 512" stroke="#c8102e" stroke-width="40" />
                                <path d="M512 0L0 512" stroke="#c8102e" stroke-width="40" />
                                <rect width="170" height="512" x="171" fill="#fff" />
                                <rect width="512" height="170" y="171" fill="#fff" />
                                <rect width="102" height="512" x="205" fill="#c8102e" />
                                <rect width="512" height="102" y="205" fill="#c8102e" />
                            </svg>
                        </span>
                    @else
                        <span class="inline-flex items-center justify-center w-5 h-5 overflow-hidden rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" class="w-full h-full">
                                <rect width="1" height="2" fill="#002B7F" />
                                <rect width="1" height="2" x="1" fill="#FCD116" />
                                <rect width="1" height="2" x="2" fill="#CE1126" />
                            </svg>
                        </span>
                    @endif
                    <svg class="w-4 h-4 ml-1 text-gray-500 transition-transform duration-300 group-hover:rotate-180"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>

                <div
                    class="absolute right-0 z-50 invisible mt-1 origin-top-right scale-95 opacity-0 transition-all duration-200 bg-white border border-rule rounded-[4px] shadow-[3px_3px_0_#e5e5e0] min-w-[160px] py-1 group-hover:visible group-hover:scale-100 group-hover:opacity-100">
                    @foreach (['en' => 'English', 'ro' => 'Română'] as $switchLocale => $switchLabel)
                        <a href="{{ route(Route::currentRouteName(), ['locale' => $switchLocale] + Route::current()->parameters()) }}"
                            @class([
                                'flex items-center w-full px-4 py-2.5 text-[13.5px] font-medium transition-colors',
                                'bg-emerald-50 text-emerald-700' => App::getLocale() === $switchLocale,
                                'text-gray-700 hover:bg-row-hover' => App::getLocale() !== $switchLocale,
                            ])>
                            <span
                                class="inline-flex items-center justify-center w-5 h-5 mr-2 overflow-hidden rounded-full">
                                @if ($switchLocale === 'en')
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-full h-full">
                                        <rect width="512" height="512" fill="#012169" />
                                        <path d="M512 0L0 512" stroke="#fff" stroke-width="74" />
                                        <path d="M0 0L512 512" stroke="#fff" stroke-width="74" />
                                        <path d="M0 0L512 512" stroke="#c8102e" stroke-width="40" />
                                        <path d="M512 0L0 512" stroke="#c8102e" stroke-width="40" />
                                        <rect width="170" height="512" x="171" fill="#fff" />
                                        <rect width="512" height="170" y="171" fill="#fff" />
                                        <rect width="102" height="512" x="205" fill="#c8102e" />
                                        <rect width="512" height="102" y="205" fill="#c8102e" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" class="w-full h-full">
                                        <rect width="1" height="2" fill="#002B7F" />
                                        <rect width="1" height="2" x="1" fill="#FCD116" />
                                        <rect width="1" height="2" x="2" fill="#CE1126" />
                                    </svg>
                                @endif
                            </span>
                            {{ $switchLabel }}
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Desktop CTA --}}
            <a href="{{ route('contact', ['locale' => App::getLocale()]) }}" wire:navigate
                class="hidden lg:inline-flex items-center text-[13px] font-semibold text-emerald-50 hover:text-emerald-50 bg-night rounded-[4px] px-5 py-[10px] shadow-[2px_2px_0_#059669] transition-all duration-[120ms] hover:shadow-[1px_1px_0_#059669] hover:translate-x-px hover:translate-y-px">
                {{ __('messages.hero.contact_button') }}
            </a>

            {{-- Mobile menu button --}}
            <button type="button" @click="isOpen = !isOpen" :aria-expanded="isOpen"
                aria-label="{{ __('messages.menu.toggle') }}"
                class="lg:hidden inline-flex items-center justify-center w-11 h-11 rounded-[4px] border border-rule bg-white text-gray-900 transition-colors hover:bg-row-hover">
                <svg class="w-5 h-5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile panel --}}
    <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4" class="lg:hidden border-t border-rule bg-canvas">
        <div class="flex flex-col px-6 py-3">
            @foreach ($navLinks as $navRoute => $navLabel)
                <a href="{{ route($navRoute, ['locale' => App::getLocale()]) }}" @click="isOpen = false" wire:navigate
                    @class([
                        'flex items-center py-3.5 text-[15px] font-medium border-b border-rule transition-colors',
                        'text-emerald-700' => Route::currentRouteName() === $navRoute,
                        'text-gray-700 hover:text-gray-900' => Route::currentRouteName() !== $navRoute,
                    ])>
                    {{ $navLabel }}
                </a>
            @endforeach

            <a href="{{ route('contact', ['locale' => App::getLocale()]) }}" @click="isOpen = false" wire:navigate
                class="inline-flex items-center justify-center mt-4 mb-2 text-[14.5px] font-semibold text-emerald-50 hover:text-emerald-50 bg-night rounded-[4px] px-6 py-3.5 shadow-[3px_3px_0_#059669] transition-all duration-[120ms] hover:shadow-[1px_1px_0_#059669] hover:translate-x-[2px] hover:translate-y-[2px]">
                {{ __('messages.hero.contact_button') }}
            </a>
        </div>
    </div>
</nav>
