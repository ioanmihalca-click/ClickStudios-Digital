<div x-data="{
    selectedItem: null,
    current: 0,
    itemCount: {{ count($portfolioItems) }},
    perPage: 3,
    get maxIndex() { return Math.max(0, this.itemCount - this.perPage) },
    prev() { this.current = Math.max(0, this.current - 1) },
    next() { this.current = Math.min(this.maxIndex, this.current + 1) },
    get offset() { return this.current * (100 / this.perPage) },
    mobileActive: 0,
    updateMobileActive(event) {
        const el = event.target;
        if (!el.children.length) return;
        const card = el.children[0];
        const gap = 16;
        this.mobileActive = Math.round(el.scrollLeft / (card.offsetWidth + gap));
    }
}">
    <div class="max-w-5xl mx-auto px-4">
        {{-- Header Section --}}
        <section class="max-w-[280px] ml-auto md:max-w-none md:mx-0 pt-24 pb-8">
            <h1 class="mb-1 uppercase tracking-wide leading-none font-jakarta">
                <span class="block text-lg font-extrabold text-emerald-700 md:text-4xl lg:text-5xl">
                    {{ __('messages.portfolio.title') }}
                </span>
            </h1>

            <h2 class="mb-3 text-lg font-bold text-gray-900 uppercase tracking-wide leading-[1.1] font-jakarta md:text-2xl lg:text-3xl">
                {{ __('messages.portfolio.statement') }}
            </h2>

            <h3 class="max-w-lg mb-5 text-sm text-gray-600 md:text-lg leading-snug">
                {{ __('messages.portfolio.subtitle') }}
            </h3>
        </section>

        {{-- Mobile: Horizontal scroll slider --}}
        <div class="md:hidden max-w-[280px] ml-auto">
            <div class="flex gap-4 overflow-x-auto snap-x snap-mandatory scrollbar-hide pb-2"
                x-ref="mobileTrack"
                @scroll.passive="updateMobileActive($event)">
                @foreach ($portfolioItems as $item)
                    <div class="w-[280px] min-w-[280px] snap-start shrink-0">
                        <div class="flex flex-col h-full bg-white border shadow-lg rounded-2xl border-gray-100">
                            @if ($item['image'])
                                <div class="p-3">
                                    <div class="rounded-xl shadow-lg shadow-gray-900/35 ring-1 ring-gray-900/10">
                                        <div class="relative overflow-hidden rounded-xl aspect-video">
                                            <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['title'] }}"
                                                class="object-cover w-full h-full">
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="flex flex-col flex-grow p-4 text-center">
                                <h3 class="mb-2 text-sm font-bold tracking-wide text-gray-900 uppercase font-jakarta">
                                    {!! htmlspecialchars_decode($item['title']) !!}
                                </h3>

                                <div class="mb-3 text-xs leading-relaxed text-gray-600 line-clamp-2">
                                    {!! htmlspecialchars_decode($item['short_description'] ?? $item['description']) !!}
                                </div>

                                <div class="mt-auto">
                                    <button @click="selectedItem = @js($item['slug'])"
                                        class="inline-flex items-center justify-center px-5 py-1.5 text-[10px] font-bold tracking-widest uppercase rounded-full border border-emerald-600 text-emerald-700 hover:bg-emerald-600 hover:text-white transition-colors duration-300">
                                        {{ __('messages.view_details') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Mobile dots --}}
            @if (count($portfolioItems) > 1)
                <div class="flex justify-center gap-2 mt-4">
                    @foreach ($portfolioItems as $index => $item)
                        <button
                            class="w-2 h-2 rounded-full transition-colors duration-300"
                            :class="mobileActive === {{ $index }} ? 'bg-emerald-600' : 'bg-gray-300'"
                            @click="$refs.mobileTrack.children[{{ $index }}].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'start' })"
                        ></button>
                    @endforeach
                </div>
            @endif
        </div>

        {{-- Desktop: Slider with arrows --}}
        <div class="hidden md:block relative">
            {{-- Navigation arrows (only when more than 3 items) --}}
            <template x-if="itemCount > perPage">
                <div>
                    <button
                        @click="prev()"
                        :disabled="current === 0"
                        class="absolute -left-5 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-white shadow-lg border border-gray-200 flex items-center justify-center transition-opacity duration-300"
                        :class="current === 0 ? 'opacity-30 cursor-not-allowed' : 'opacity-100 hover:bg-emerald-50'"
                    >
                        <svg class="w-5 h-5 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>

                    <button
                        @click="next()"
                        :disabled="current >= maxIndex"
                        class="absolute -right-5 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-white shadow-lg border border-gray-200 flex items-center justify-center transition-opacity duration-300"
                        :class="current >= maxIndex ? 'opacity-30 cursor-not-allowed' : 'opacity-100 hover:bg-emerald-50'"
                    >
                        <svg class="w-5 h-5 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </template>

            {{-- Slider container --}}
            <div class="overflow-hidden">
                <div class="flex -mx-3 transition-transform duration-500 ease-in-out"
                    :style="{ transform: 'translateX(-' + offset + '%)' }">
                    @foreach ($portfolioItems as $item)
                        <div class="w-1/3 shrink-0 px-3">
                            <div class="flex flex-col h-full bg-white border shadow-lg rounded-2xl border-gray-100">
                                @if ($item['image'])
                                    <div class="p-3">
                                        <div class="rounded-xl shadow-lg shadow-gray-900/35 ring-1 ring-gray-900/10">
                                            <div class="relative overflow-hidden rounded-xl aspect-video">
                                                <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['title'] }}"
                                                    class="object-cover w-full h-full">
                                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class="flex flex-col flex-grow p-4 text-center">
                                    <h3 class="mb-2 text-base font-bold tracking-wide text-gray-900 uppercase font-jakarta">
                                        {!! htmlspecialchars_decode($item['title']) !!}
                                    </h3>

                                    <div class="mb-3 text-xs leading-relaxed text-gray-600 line-clamp-2">
                                        {!! htmlspecialchars_decode($item['short_description'] ?? $item['description']) !!}
                                    </div>

                                    <div class="mt-auto">
                                        <button @click="selectedItem = @js($item['slug'])"
                                            class="inline-flex items-center justify-center px-5 py-1.5 text-xs font-bold tracking-widest uppercase rounded-full border border-emerald-600 text-emerald-700 hover:bg-emerald-600 hover:text-white transition-colors duration-300">
                                            {{ __('messages.view_details') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Desktop dots --}}
            @if (count($portfolioItems) > 3)
                <div class="flex justify-center gap-2 mt-6">
                    @for ($i = 0; $i <= count($portfolioItems) - 3; $i++)
                        <button
                            class="w-2.5 h-2.5 rounded-full transition-colors duration-300"
                            :class="current === {{ $i }} ? 'bg-emerald-600' : 'bg-gray-300'"
                            @click="current = {{ $i }}"
                        ></button>
                    @endfor
                </div>
            @endif
        </div>
    </div>

    {{-- Tech icons --}}
    <div class="flex items-center justify-center gap-6 py-12 text-gray-400">
        <i class="text-2xl fa-brands fa-laravel"></i>
        <i class="text-2xl fa-brands fa-php"></i>
        <i class="text-2xl fa-brands fa-js"></i>
        <i class="text-2xl fa-brands fa-vuejs"></i>
        <i class="text-2xl fa-solid fa-microchip"></i>
    </div>

    <x-portfolio-detail-modal :items="$portfolioItems" />
</div>
