<section class="relative z-30 py-16">
    <div class="container px-4 mx-auto">
        <div class="max-w-3xl mx-auto mb-12 text-center">
            <h2 class="mb-4 text-3xl font-bold uppercase text-gray-900 md:text-4xl">
                {{ __('messages.featured.title') }}
            </h2>
            <p class="text-gray-600">
                {{ __('messages.featured.subtitle') }}
            </p>
        </div>

        <div class="grid max-w-5xl grid-cols-1 gap-8 mx-auto md:grid-cols-2 lg:grid-cols-3">
            @foreach ($featuredApps as $item)
                <div
                    class="overflow-hidden transition-all duration-300 bg-white border border-gray-200 shadow-lg rounded-xl hover:shadow-xl hover:-translate-y-1">
                    @if ($item['image'])
                        <div class="overflow-hidden">
                            <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['title'] }}"
                                class="object-cover w-full h-48 transition-transform duration-300 hover:scale-105">
                        </div>
                    @endif

                    <div class="p-5">
                        <h3 class="mb-2 text-lg font-bold uppercase text-gray-900">
                            {!! htmlspecialchars_decode($item['title']) !!}
                        </h3>

                        <p class="mb-4 text-sm text-gray-600">
                            {!! htmlspecialchars_decode($item['short_description'] ?? $item['description']) !!}
                        </p>

                        @if ($item['website_url'])
                            <a href="{{ $item['website_url'] }}" target="_blank"
                                class="inline-flex items-center justify-center px-6 py-2 text-sm font-semibold tracking-wider text-white uppercase transition-all duration-300 rounded-full bg-emerald-600 hover:bg-emerald-700">
                                {{ __('messages.featured.visit_website') }}
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <a href="{{ \App\Helpers\LocaleHelper::getLocalizedRoute('portfolio') }}" wire:navigate
                class="inline-flex items-center justify-center px-8 py-3 text-sm font-semibold tracking-wider uppercase transition-all duration-300 border-2 rounded-full text-emerald-600 border-emerald-600 hover:bg-emerald-600 hover:text-white">
                {{ __('messages.featured.view_all') }}
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>
</section>
