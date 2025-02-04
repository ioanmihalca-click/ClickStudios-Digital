<div class="relative min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900">
    <div class="absolute inset-0 opacity-20">
        <div id="tsparticles"></div>
    </div>

    <div class="container relative z-10 px-4 py-24 mx-auto">
        <div class="mb-16 text-center">
            <h2
                class="mb-6 text-4xl tracking-wider text-white transition-transform duration-300 transform font-roboto-condensed md:text-6xl hover:scale-105">
                Portfolio
            </h2>
            <p class="max-w-2xl mx-auto text-lg italic font-light text-emerald-300 md:text-xl">
                "The only way to do something well is to be passionate."
            </p>
        </div>


        <div x-data="{ selectedItem: null, hoverItem: null, mouseX: 0, mouseY: 0 }" @mousemove="mouseX = $event.clientX; mouseY = $event.clientY"
            class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($portfolioItems as $item)
                <div @click="selectedItem = '{{ $item['slug'] }}'" @mouseenter="hoverItem = '{{ $item['slug'] }}'"
                    @mouseleave="hoverItem = null"
                    class="relative overflow-hidden transition-all duration-500 border cursor-pointer group rounded-2xl bg-white/5 backdrop-blur-sm border-white/10 hover:border-emerald-500/50">
                    <div class="flex flex-col h-full p-6">
                        <div
                            class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-br from-emerald-500/0 via-transparent to-emerald-500/0 group-hover:opacity-20">
                        </div>
                        <h3
                            class="mb-3 text-2xl font-bold text-white transition-colors duration-300 group-hover:text-emerald-400">
                            {{ $item['title'] }}
                        </h3>
                        <p class="mb-4 text-gray-300 transition-colors duration-300 group-hover:text-white">
                            {{ $item['short_description'] }}
                        </p>
                        <div class="mt-auto">
                            <div class="flex flex-wrap gap-2">
                                @if (!empty($item['technologies']))
                                    @foreach ($item['technologies'] as $tech)
                                        <span
                                            class="px-3 py-1 text-xs border rounded-full bg-emerald-900/50 text-emerald-300 border-emerald-500/20">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Modal/Slide-over panel -->
            <div x-cloak x-show="selectedItem !== null" class="fixed inset-0 z-[60] overflow-hidden"
                @keydown.escape.window="selectedItem = null">

                <!-- Backdrop -->
                <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" @click="selectedItem = null"></div>

                <!-- Modal content -->
                <div x-show="selectedItem !== null" x-transition:enter="transform transition ease-in-out duration-500"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transform transition ease-in-out duration-500"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                    class="fixed inset-y-0 right-0 w-full max-w-md shadow-2xl bg-gradient-to-br from-slate-900 to-slate-800">

                    <div class="relative p-6 border-b border-white/10">
                        <button @click="selectedItem = null"
                            class="absolute text-gray-400 transition-colors top-12 right-4 hover:text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="p-6 overflow-y-auto max-h-[calc(100vh-5rem)]">
                        @foreach ($portfolioItems as $item)
                            <div x-show="selectedItem === '{{ $item['slug'] }}'" class="space-y-6">
                                <h2 class="mb-4 text-3xl font-bold text-white">{{ $item['title'] }}</h2>

                                <div class="relative overflow-hidden rounded-xl">
                                   <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['title'] }}"
    class="w-full h-auto transition-transform duration-300 transform rounded-xl hover:scale-105">
                                </div>

                                <p class="text-gray-300">{{ $item['description'] }}</p>

                                @if (!empty($item['features']))
                                    <div class="space-y-2">
                                        <h3 class="text-lg font-semibold text-emerald-400">Key Features
                                        </h3>
                                        <ul class="space-y-2 text-gray-300">
                                            @foreach ($item['features'] as $feature)
                                                <li class="flex items-center gap-2">
                                                    <svg class="w-5 h-5 text-emerald-500" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                    <span>{{ $feature }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (!empty($item['youtube_url']))
                                    <div class="space-y-2">
                                        <h3 class="text-lg font-semibold text-emerald-400">Video:</h3>
                                        <div class="relative overflow-hidden rounded-xl aspect-video">
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

                                @if (isset($item['website_url']))
                                    <a href="{{ $item['website_url'] }}" target="_blank" rel="noopener noreferrer"
                                        class="inline-flex items-center px-6 py-3 text-white transition-colors duration-300 rounded-lg bg-emerald-600 hover:bg-emerald-700">
                                        Visit website
                                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                            </path>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
