<section class="relative z-30 py-12 bg-gradient-to-b from-gray-900 to-gray-800">
    <div class="container px-4 mx-auto">
        <div class="max-w-3xl mx-auto text-center">
            <span
                class="inline-block px-4 py-1.5 mb-4 text-sm font-medium text-emerald-400 bg-emerald-500/10 rounded-full">
                {{ __('messages.featured.tagline') }}
            </span>
            <h2 class="mb-4 text-3xl font-bold text-white md:text-4xl">
                {{ __('messages.featured.title') }}
            </h2>
            <p class="mb-8 text-gray-300">
                {{ __('messages.featured.subtitle') }}
            </p>
        </div>

        <div class="grid max-w-5xl grid-cols-1 gap-6 mx-auto md:grid-cols-2 lg:grid-cols-3 perspective-1000">
            @foreach ($featuredApps as $index => $item)
                <div
                    class="relative overflow-hidden transition-all duration-500 border rounded-xl bg-gray-800/50 backdrop-blur-sm border-white/10 hover:border-emerald-500/50 transform-style-3d
                    @if ($index === 0) md:rotate-y-30 md:hover:rotate-y-0
                    @elseif($index === 1) center-card md:hover:translate-z-10
                    @else md:-rotate-y-30 md:hover:rotate-y-0 @endif">
                    @if ($item['image'])
                        <div class="relative overflow-hidden group">
                            <div class="absolute inset-0 z-10 bg-gradient-to-t from-gray-900/80 to-gray-900/40"></div>
                            <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['title'] }}"
                                class="object-cover w-full h-48 transition-transform duration-300 transform group-hover:scale-105">
                        </div>
                    @endif

                    <div class="flex flex-col h-full p-4">
                        <h3 class="mb-2 text-xl font-bold text-white">
                            {!! htmlspecialchars_decode($item['title']) !!}
                        </h3>

                        @if ($item['website_url'])
                            <a href="{{ $item['website_url'] }}" target="_blank"
                                class="inline-flex items-center justify-center px-3 py-1.5 mb-3 text-sm text-white transition-all duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700">
                                Visit Website
                            </a>
                        @endif

                        <p class="mb-4 text-sm text-gray-300">
                            {!! htmlspecialchars_decode($item['description']) !!}
                        </p>

                        @if (!empty($item['features']))
                            <div class="mb-4">
                                <h4 class="mb-2 text-base font-semibold text-emerald-400">
                                    Key Features
                                </h4>
                                <ul class="space-y-1.5">
                                    @foreach ($item['features'] as $feature)
                                        <li class="flex items-start gap-2 text-sm text-gray-300">
                                            <svg class="flex-shrink-0 w-4 h-4 mt-1 text-emerald-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <span>
                                                {!! mb_convert_encoding(preg_replace('/u([0-9a-fA-F]{4})/', '&#x\\1;', $feature), 'UTF-8', 'HTML-ENTITIES') !!}
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="flex flex-wrap gap-1.5">
                            @if (!empty($item['technologies']))
                                @foreach ($item['technologies'] as $tech)
                                    <span
                                        class="px-2 py-0.5 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <a href="{{ \App\Helpers\LocaleHelper::getLocalizedRoute('portfolio') }}" wire:navigate
                class="inline-flex items-center justify-center px-8 py-3 text-base font-medium text-white transition-all duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700 min-w-[200px]">
                {{ __('messages.featured.view_all') }}
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>
