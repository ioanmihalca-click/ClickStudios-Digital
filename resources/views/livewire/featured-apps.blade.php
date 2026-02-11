<section class="relative z-30 py-2 w-full">
    <div class="container px-4 mx-auto w-full">
        <div class="grid grid-cols-1 gap-4 mx-auto md:grid-cols-3 md:gap-6 max-w-7xl">
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
                        <h3 class="mb-2 text-sm md:text-base font-bold uppercase text-gray-900 tracking-wide">
                            {!! htmlspecialchars_decode($item['title']) !!}
                        </h3>

                        <div class="mb-3 text-xs text-gray-600 line-clamp-2 leading-relaxed">
                            {!! htmlspecialchars_decode($item['short_description'] ?? $item['description']) !!}
                        </div>

                        <div class="mt-auto">
                            @if ($item['website_url'])
                                <a href="{{ $item['website_url'] }}" target="_blank"
                                    class="inline-flex items-center justify-center px-5 py-1.5 text-[10px] md:text-xs font-bold tracking-widest uppercase rounded-full border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white transition-colors duration-300">
                                    {{ __('messages.featured.visit_website') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
