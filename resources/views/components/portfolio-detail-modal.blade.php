@props(['items'])

<template x-teleport="body">
    {{-- Plain x-show only, no x-transition anywhere in here. On this teleported tree
         Alpine's transitions desync the display bookkeeping (the overlay ends up one
         state behind), and a nested transitioned x-show stays stuck on enter-start. --}}
    <div x-cloak x-show="selectedItem !== null" class="fixed inset-0 z-[60] flex items-center justify-center p-4"
        x-effect="document.body.classList.toggle('overflow-hidden', selectedItem !== null)"
        @keydown.escape.window="selectedItem = null">

        {{-- Backdrop --}}
        <div class="absolute inset-0 bg-night/40 backdrop-blur-sm" @click="selectedItem = null"></div>

        {{-- Panel --}}
        <div class="relative w-full max-w-2xl max-h-[85vh] overflow-y-auto bg-white border border-gray-900 rounded-lg"
            @click.stop>

            {{-- Close --}}
            <button type="button" @click="selectedItem = null" aria-label="{{ __('messages.close') }}"
                class="absolute top-4 right-4 z-10 flex items-center justify-center w-11 h-11 rounded-[4px] border border-rule bg-white text-gray-600 transition-colors hover:bg-row-hover hover:text-gray-900">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            @foreach ($items as $item)
                <div x-show="selectedItem === @js($item['slug'])">
                    @if ($item['image'])
                        <div class="shrink-0 aspect-video overflow-hidden border-b border-rule">
                            <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['title'] }}"
                                class="object-cover w-full h-full" loading="lazy">
                        </div>
                    @endif

                    <div class="px-[22px] py-8 md:px-8">
                        <h2 class="mb-5 font-jakarta font-extrabold text-[26px] uppercase tracking-[0.01em] text-gray-900">
                            {!! htmlspecialchars_decode($item['title']) !!}
                        </h2>

                        <div class="text-[15px] leading-[1.6] text-gray-600 text-pretty">
                            {!! nl2br(e($item['description'])) !!}
                        </div>

                        @if (!empty($item['youtube_url']))
                            <div class="mt-8 pt-8 border-t border-rule">
                                <div class="mb-3 font-mono text-xs tracking-[0.14em] uppercase text-emerald-600">
                                    {{ __('messages.portfolio.video_preview') }}
                                </div>
                                @php
                                    $youtubeUrl = $item['youtube_url'];
                                    if (strpos($youtubeUrl, 'watch?v=') !== false) {
                                        $videoId = explode('watch?v=', $youtubeUrl)[1];
                                    } elseif (strpos($youtubeUrl, 'youtu.be/') !== false) {
                                        $videoId = explode('youtu.be/', $youtubeUrl)[1];
                                    } else {
                                        $videoId = $youtubeUrl;
                                    }
                                    $videoId = explode('&', $videoId)[0];
                                @endphp
                                <div class="relative aspect-video overflow-hidden rounded-[4px] border border-rule">
                                    <iframe src="https://www.youtube.com/embed/{{ $videoId }}"
                                        class="absolute inset-0 w-full h-full" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            </div>
                        @endif

                        @if (!empty($item['website_url']))
                            <div class="mt-8 pt-8 border-t border-rule">
                                <a href="{{ $item['website_url'] }}" target="_blank" rel="noopener noreferrer"
                                    class="inline-flex items-center gap-[9px] bg-night text-emerald-50 hover:text-emerald-50 font-semibold text-[14.5px] px-[30px] py-[15px] rounded-[4px] shadow-[3px_3px_0_#059669] transition-all duration-[120ms] hover:shadow-[1px_1px_0_#059669] hover:translate-x-[2px] hover:translate-y-[2px]">
                                    {{ __('messages.portfolio.visit_project') }}
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</template>
