<section class="relative z-30 py-2 w-full" x-data="{ selectedItem: null }">
    {{-- Mobile: Stacked cards --}}
    <div class="flex flex-col gap-4 md:hidden max-w-[280px] ml-auto">
        @foreach ($featuredApps->take(3) as $item)
            <div class="flex flex-col bg-white shadow-lg rounded-2xl h-full border border-gray-100">
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
                    <h3 class="mb-2 text-sm font-bold uppercase text-gray-900 tracking-wide font-jakarta">
                        {!! htmlspecialchars_decode($item['title']) !!}
                    </h3>

                    <div class="mb-3 text-xs text-gray-600 line-clamp-2 leading-relaxed">
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
    <div class="hidden md:grid max-w-none mx-auto grid-cols-3 gap-6">
        @foreach ($featuredApps->take(3) as $item)
            <div class="flex flex-col bg-white shadow-lg rounded-2xl h-full border border-gray-100">
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
                    <h3 class="mb-2 text-base font-bold uppercase text-gray-900 tracking-wide font-jakarta">
                        {!! htmlspecialchars_decode($item['title']) !!}
                    </h3>

                    <div class="mb-3 text-xs text-gray-600 line-clamp-2 leading-relaxed">
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

    <div class="mt-6 text-center max-w-[280px] ml-auto md:max-w-none md:mx-auto">
        <a href="{{ route('portfolio', ['locale' => App::getLocale()]) }}" wire:navigate
            class="text-sm font-normal text-emerald-600 hover:text-emerald-700 transition-colors duration-300">
            {{ __('messages.featured.see_more') }} &rarr;
        </a>
    </div>

    <x-portfolio-detail-modal :items="$featuredApps" />
</section>
