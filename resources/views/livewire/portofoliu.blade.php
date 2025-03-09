<!-- Portfolio Grid - Modernizat și optimizat pentru spațiul disponibil -->
<div class="relative min-h-screen pb-16 bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900">
    <!-- Background particles - Păstrat pentru consistență vizuală -->
    <div class="absolute inset-0 opacity-20">
        <div id="tsparticles"></div>
    </div>

    <!-- State global pentru modal, în afara container-ului pentru z-index corect -->
    <div x-data="{ selectedItem: null }">
        <div class="container relative z-10 px-4 pt-24 pb-16 mx-auto">
            <!-- Header Section - Păstrat pentru consistență -->
            <div class="mb-12 text-center">
                <span
                    class="inline-block px-5 py-2 mb-5 text-sm font-medium border rounded-full text-emerald-400 bg-emerald-500/10 border-emerald-500/20 backdrop-blur-sm">
                    {{ __('messages.portfolio.tagline') }}
                </span>
                <h2 class="mb-5 text-4xl font-bold tracking-wider text-white md:text-5xl">
                    {{ __('messages.portfolio.title') }}
                </h2>
                <p class="max-w-2xl mx-auto text-lg italic font-light leading-relaxed text-emerald-300/90">
                    {{ __('messages.portfolio.subtitle') }}
                </p>
            </div>

            <!-- Portfolio Grid - Optimizat pentru încadrare și layout -->
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($portfolioItems as $item)
                    <!-- Card cu design modernizat, mai compact, încadrat în layout -->
                    <div
                        class="group relative overflow-hidden rounded-lg h-[200px] bg-gradient-to-br from-slate-800/80 to-slate-900/80 shadow-md border border-slate-700/30 backdrop-blur-sm transition-all duration-300 hover:shadow-lg hover:shadow-emerald-600/10 hover:border-emerald-500/30">
                        <!-- Overlay gradient -->
                        <div
                            class="absolute inset-0 transition-opacity duration-500 opacity-0 bg-gradient-to-t from-emerald-900/60 to-slate-900/40 group-hover:opacity-100">
                        </div>

                        <!-- Conținut -->
                        <div class="flex flex-col w-full h-full p-4">
                            <!-- Titlu proiect -->
                            <h3
                                class="relative text-lg font-bold text-white transition-colors duration-300 group-hover:text-emerald-300">
                                {{ $item['title'] }}
                            </h3>

                            <!-- Descriere scurtă - mai compactă -->
                            <p class="mb-3 text-xs text-gray-400 line-clamp-2">{{ $item['short_description'] }}</p>

                            <!-- Tehnologii folosite - design mai compact -->
                            <div class="mt-auto">
                                <div class="flex flex-wrap gap-1.5">
                                    @if (!empty($item['technologies']))
                                        @foreach ($item['technologies'] as $tech)
                                            <span
                                                class="px-1.5 py-0.5 text-[10px] font-medium rounded bg-emerald-900/20 text-emerald-400/80 border-l border-emerald-500/30">
                                                @php
                                                    $techText = trim($tech, "\" '");
                                                @endphp
                                                {{ $techText }}
                                            </span>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <!-- Button subtle în colțul din dreapta jos -->
                            <button @click="selectedItem = '{{ $item['slug'] }}'"
                                class="absolute right-3 bottom-3 p-1.5 text-xs bg-emerald-500/10 hover:bg-emerald-600/30 text-emerald-400 rounded-full transition-all duration-300 opacity-0 group-hover:opacity-100 border border-emerald-500/20"
                                title="View Project Details">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </button>

                            <!-- Overlay la hover - minimalist -->
                            <div
                                class="absolute inset-0 flex flex-col items-center justify-center p-4 transition-all duration-300 translate-y-4 opacity-0 bg-slate-900/80 backdrop-blur group-hover:opacity-100 group-hover:translate-y-0">
                                <h3 class="mb-2 text-lg font-bold text-emerald-400">{{ $item['title'] }}</h3>
                                <p class="mb-4 text-xs text-center text-white/90 line-clamp-3">
                                    {{ $item['short_description'] }}</p>
                                <button @click="selectedItem = '{{ $item['slug'] }}'"
                                    class="px-4 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white text-xs rounded-md transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-md hover:shadow-emerald-600/30 focus:outline-none focus:ring-1 focus:ring-emerald-500 focus:ring-offset-1 focus:ring-offset-slate-900">
                                    <span class="flex items-center">
                                        <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                        View Details
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Modal/Slide-over panel pentru detalii proiect - Mutat în afara container-ului -->
        <div x-cloak x-show="selectedItem !== null" class="fixed inset-0 z-[999] overflow-hidden"
            @keydown.escape.window="selectedItem = null">

            <!-- Backdrop cu blur accentuat -->
            <div class="absolute inset-0 bg-black/30 backdrop-blur-md" x-show="selectedItem !== null"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="selectedItem = null">
            </div>

            <!-- Modal content -->
            <div x-show="selectedItem !== null" x-transition:enter="transform transition ease-in-out duration-400"
                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition ease-in-out duration-400"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                class="fixed inset-y-0 right-0 w-full max-w-md z-[1000] shadow-2xl bg-gradient-to-b from-slate-900 to-slate-800 border-l border-emerald-500/20">

                <!-- Header modernizat cu glow effect -->
                <div class="flex items-center justify-between p-4 border-b border-slate-700/40 bg-slate-800/70">
                    <div class="flex items-center space-x-2">
                        <div class="h-1.5 w-1.5 rounded-full bg-emerald-500 animate-pulse"></div>
                        <h3 class="text-base font-bold text-white">Project Details</h3>
                    </div>
                    <button @click="selectedItem = null"
                        class="flex items-center justify-center text-gray-400 transition-all duration-300 rounded-full w-7 h-7 hover:bg-white/10 hover:text-white">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Conținut modal -->
                <div class="p-5 overflow-y-auto max-h-[calc(100vh-4rem)]">
                    @foreach ($portfolioItems as $item)
                        <div x-show="selectedItem === '{{ $item['slug'] }}'" class="space-y-6">
                            <h2 class="mb-3 text-2xl font-bold text-white">{{ $item['title'] }}</h2>

                            <!-- Imagine cu blur load effect -->
                            <div class="relative overflow-hidden rounded-lg group">
                                <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['title'] }}"
                                    class="w-full h-auto transition-transform duration-500 transform rounded-lg group-hover:scale-102"
                                    loading="lazy">
                                <div
                                    class="absolute inset-0 transition-opacity duration-300 opacity-0 bg-gradient-to-t from-black/50 to-transparent group-hover:opacity-100">
                                </div>
                            </div>

                            <p class="text-sm leading-relaxed text-gray-300">{{ $item['description'] }}</p>

                            @if (!empty($item['features']))
                                <div class="p-4 space-y-3 rounded-lg ">
                                    <h3 class="text-base font-semibold text-emerald-400">Key Features</h3>
                                    <ul class="space-y-2 text-sm text-gray-300">
                                        @foreach ($item['features'] as $feature)
                                            <li class="flex items-start gap-2">
                                                <svg class="flex-shrink-0 w-4 h-4 mt-0.5 text-emerald-500"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span>{{ trim($feature, "\" '") }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (!empty($item['youtube_url']))
                                <div class="space-y-3">
                                    <h3 class="text-base font-semibold text-emerald-400">Video Demo</h3>
                                    <div class="relative overflow-hidden rounded-lg shadow-lg aspect-video">
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

                            <div class="pt-3">
                                @if (isset($item['website_url']))
                                    <a href="{{ $item['website_url'] }}" target="_blank" rel="noopener noreferrer"
                                        class="inline-flex items-center px-5 py-2 text-sm font-medium text-white transition-all duration-300 rounded-md bg-emerald-600 hover:bg-emerald-700 transform hover:-translate-y-0.5 hover:shadow-lg hover:shadow-emerald-600/20">
                                        Visit website
                                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                            </path>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
