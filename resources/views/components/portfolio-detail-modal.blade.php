@props(['items'])

<template x-teleport="body">
<div x-cloak x-show="selectedItem !== null" class="fixed inset-0 z-[60] flex items-center justify-center p-4"
    x-effect="document.body.classList.toggle('overflow-hidden', selectedItem !== null)"
    @keydown.escape.window="selectedItem = null">

    {{-- Backdrop --}}
    <div class="absolute inset-0 bg-black/30 backdrop-blur-sm" x-show="selectedItem !== null"
        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="selectedItem = null">
    </div>

    {{-- Modal --}}
    <div x-show="selectedItem !== null" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="relative w-full max-w-2xl max-h-[85vh] overflow-y-auto bg-white rounded-2xl shadow-2xl" @click.stop>

        {{-- Close button --}}
        <button @click="selectedItem = null"
            class="absolute top-4 right-4 z-10 flex items-center justify-center w-8 h-8 rounded-full bg-gray-100 text-gray-500 hover:bg-gray-200 hover:text-gray-700 transition-colors duration-200">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
        </button>

        @foreach ($items as $item)
            <div x-show="selectedItem === @js($item['slug'])" x-transition.opacity.duration.150ms>
                {{-- Image --}}
                @if ($item['image'])
                    <div class="p-4 pb-0">
                        <div class="overflow-hidden rounded-xl shadow-lg shadow-gray-900/20 ring-1 ring-gray-900/10">
                            <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['title'] }}"
                                class="w-full aspect-video object-cover" loading="lazy">
                        </div>
                    </div>
                @endif

                <div class="p-6 space-y-4">
                    {{-- Title --}}
                    <h2 class="text-2xl font-extrabold uppercase tracking-wide text-gray-900 font-jakarta">
                        {!! htmlspecialchars_decode($item['title']) !!}
                    </h2>

                    {{-- Description --}}
                    <div class="text-sm text-gray-600 leading-relaxed space-y-3">
                        {!! nl2br(e($item['description'])) !!}
                    </div>

                    {{-- YouTube embed --}}
                    @if (!empty($item['youtube_url']))
                        <div class="space-y-2">
                            <h3 class="text-sm font-bold uppercase tracking-wide text-emerald-700 font-jakarta">
                                {{ __('messages.portfolio.video_preview') }}
                            </h3>
                            <div class="relative overflow-hidden rounded-xl aspect-video shadow-lg">
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

                                <iframe src="https://www.youtube.com/embed/{{ $videoId }}"
                                    class="absolute inset-0 w-full h-full" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    @endif

                    {{-- Visit website link --}}
                    @if (!empty($item['website_url']))
                        <div class="pt-2">
                            <a href="{{ $item['website_url'] }}" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center px-6 py-2 text-xs font-bold tracking-widest uppercase rounded-full border border-emerald-600 text-emerald-700 hover:bg-emerald-600 hover:text-white transition-colors duration-300">
                                {{ __('messages.portfolio.visit_project') }}
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                    </path>
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
