<div x-data="{ selectedItem: null }">
    {{-- Header Section --}}
    <div class="max-w-5xl mx-auto px-4 pt-24 pb-8">
        <h1 class="text-4xl font-extrabold uppercase tracking-wide leading-none text-gray-900 font-jakarta md:text-5xl">
            {{ __('messages.portfolio.title') }}
        </h1>
        <p class="mt-4 max-w-2xl text-lg text-gray-600 leading-relaxed font-inter">
            {{ __('messages.portfolio.subtitle') }}
        </p>
    </div>

    {{-- Mobile: Stacked cards --}}
    <div class="flex flex-col gap-4 px-4 md:hidden max-w-[280px] ml-auto">
        @foreach ($portfolioItems as $item)
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
        @endforeach
    </div>

    {{-- Desktop: 3-column grid --}}
    <div class="hidden gap-6 px-4 mx-auto md:grid max-w-5xl grid-cols-3">
        @foreach ($portfolioItems as $item)
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
        @endforeach
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
