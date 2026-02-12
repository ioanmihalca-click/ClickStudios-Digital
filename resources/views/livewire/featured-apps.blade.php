<section class="relative z-30 py-2 w-full">
    {{-- Mobile: Vertical slider (one card at a time) --}}
    <div class="block md:hidden max-w-[280px] ml-auto"
        x-data="{
            currentIndex: 0,
            total: {{ $featuredApps->take(3)->count() }},
            autoplayInterval: null,
            isTransitioning: false,
            touchStartY: 0,
            touchEndY: 0,
            init() {
                this.startAutoplay();
            },
            startAutoplay() {
                this.stopAutoplay();
                this.autoplayInterval = setInterval(() => this.next(), 4000);
            },
            stopAutoplay() {
                if (this.autoplayInterval) {
                    clearInterval(this.autoplayInterval);
                    this.autoplayInterval = null;
                }
            },
            next() {
                if (this.isTransitioning) return;
                this.isTransitioning = true;
                this.currentIndex = (this.currentIndex + 1) % this.total;
                setTimeout(() => this.isTransitioning = false, 400);
            },
            prev() {
                if (this.isTransitioning) return;
                this.isTransitioning = true;
                this.currentIndex = (this.currentIndex - 1 + this.total) % this.total;
                setTimeout(() => this.isTransitioning = false, 400);
            },
            goTo(index) {
                if (this.isTransitioning || index === this.currentIndex) return;
                this.isTransitioning = true;
                this.currentIndex = index;
                this.startAutoplay();
                setTimeout(() => this.isTransitioning = false, 400);
            },
            destroy() {
                this.stopAutoplay();
            },
        }"
        x-on:mouseenter="stopAutoplay()"
        x-on:mouseleave="startAutoplay()"
        x-on:touchstart.passive="touchStartY = $event.changedTouches[0].screenY; stopAutoplay()"
        x-on:touchend.passive="
            touchEndY = $event.changedTouches[0].screenY;
            if (touchStartY - touchEndY > 50) { next(); }
            else if (touchEndY - touchStartY > 50) { prev(); }
            startAutoplay();
        "
    >
        <div class="relative">
            @foreach ($featuredApps->take(3) as $index => $item)
                <div
                    x-show="currentIndex === {{ $index }}"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-4"
                    :class="currentIndex === {{ $index }} ? 'relative' : 'absolute inset-x-0 top-0'"
                    class="w-full"
                >
                    <div class="flex flex-col bg-white shadow-lg rounded-2xl h-full border border-gray-100">
                        @if ($item['image'])
                            <div class="p-3">
                                <div class="rounded-xl shadow-lg">
                                    <div class="overflow-hidden rounded-xl aspect-video">
                                        <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['title'] }}"
                                            class="object-cover w-full h-full">
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="flex flex-col flex-grow p-4 text-center">
                            <h3 class="mb-2 text-sm font-bold uppercase text-gray-900 tracking-wide font-jakarta">
                                {!! htmlspecialchars_decode($item['title']) !!}
                            </h3>

                            <div class="mb-3 text-xs text-gray-600 line-clamp-2 leading-relaxed">
                                {!! htmlspecialchars_decode($item['short_description'] ?? $item['description']) !!}
                            </div>

                            <div class="mt-auto">
                                @if ($item['website_url'])
                                    <a href="{{ $item['website_url'] }}" target="_blank"
                                        class="inline-flex items-center justify-center px-5 py-1.5 text-[10px] font-bold tracking-widest uppercase rounded-full border border-emerald-600 text-emerald-700 hover:bg-emerald-600 hover:text-white transition-colors duration-300">
                                        {{ __('messages.featured.visit_website') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Dot indicators --}}
        <div class="flex items-center justify-center gap-2 mt-4">
            @foreach ($featuredApps->take(3) as $index => $item)
                <button
                    x-on:click="goTo({{ $index }})"
                    :class="currentIndex === {{ $index }}
                        ? 'w-6 h-2 bg-emerald-600 rounded-full'
                        : 'w-2 h-2 bg-gray-300 rounded-full hover:bg-gray-400'"
                    class="transition-all duration-300"
                    aria-label="Go to slide {{ $index + 1 }}"
                ></button>
            @endforeach
        </div>
    </div>

    {{-- Desktop: 3-column grid (unchanged) --}}
    <div class="hidden md:grid max-w-none mx-auto grid-cols-3 gap-6">
        @foreach ($featuredApps->take(3) as $item)
            <div class="flex flex-col bg-white shadow-lg rounded-2xl h-full border border-gray-100">
                @if ($item['image'])
                    <div class="p-3">
                        <div class="rounded-xl shadow-lg">
                            <div class="overflow-hidden rounded-xl aspect-video">
                                <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['title'] }}"
                                    class="object-cover w-full h-full">
                            </div>
                        </div>
                    </div>
                @endif

                <div class="flex flex-col flex-grow p-4 text-center">
                    <h3 class="mb-2 text-base font-bold uppercase text-gray-900 tracking-wide font-jakarta">
                        {!! htmlspecialchars_decode($item['title']) !!}
                    </h3>

                    <div class="mb-3 text-xs text-gray-600 line-clamp-2 leading-relaxed">
                        {!! htmlspecialchars_decode($item['short_description'] ?? $item['description']) !!}
                    </div>

                    <div class="mt-auto">
                        @if ($item['website_url'])
                            <a href="{{ $item['website_url'] }}" target="_blank"
                                class="inline-flex items-center justify-center px-5 py-1.5 text-xs font-bold tracking-widest uppercase rounded-full border border-emerald-600 text-emerald-700 hover:bg-emerald-600 hover:text-white transition-colors duration-300">
                                {{ __('messages.featured.visit_website') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- <div class="mt-8 text-center max-w-[280px] ml-auto md:max-w-none md:mx-auto">
        <a href="{{ route('portfolio', ['locale' => App::getLocale()]) }}" wire:navigate
            class="inline-flex items-center justify-center px-6 py-2 text-xs md:text-sm font-bold tracking-widest uppercase rounded-full bg-emerald-600 text-white hover:bg-emerald-700 transition-colors duration-300">
            {{ __('messages.featured.see_more') }}
        </a>
    </div> --}}
</section>
