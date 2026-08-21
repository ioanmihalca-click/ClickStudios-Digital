<div x-data="{ selectedItem: null }">
    <header class="max-w-[1280px] mx-auto px-6 md:px-12 pt-20 pb-14 border-b border-rule">
        <div class="font-mono text-xs tracking-[0.14em] uppercase text-emerald-600 mb-[22px]">
            {{ __('messages.portfolio.title') }}
        </div>
        <h1
            class="font-jakarta font-extrabold text-[30px] md:text-[clamp(40px,4.5vw,60px)] leading-[1.05] tracking-[-0.02em] uppercase text-gray-900 text-balance">
            {{ __('messages.portfolio.statement') }}
            <span class="text-emerald-600">{{ __('messages.portfolio.statement_highlight') }}</span>
        </h1>
        <p class="mt-6 max-w-[640px] text-[17px] leading-[1.6] text-gray-600 text-pretty">
            {{ __('messages.portfolio.subtitle') }}
        </p>
    </header>

    <section class="max-w-[1280px] mx-auto px-6 md:px-12 py-14">
        <div class="grid grid-cols-[repeat(auto-fit,minmax(min(300px,100%),1fr))] gap-6">
            @foreach ($portfolioItems as $item)
                <div
                    class="flex flex-col bg-white border border-gray-900 rounded-lg overflow-hidden transition-shadow duration-150 hover:shadow-[4px_4px_0_#d1d5db]">
                    @if ($item['image'])
                        <div class="shrink-0 aspect-video overflow-hidden border-b border-rule">
                            <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['title'] }}"
                                class="object-cover w-full h-full" loading="lazy">
                        </div>
                    @endif

                    <div class="flex flex-col flex-grow pt-5 px-[22px] pb-[22px]">
                        <h2 class="font-jakarta font-bold text-[15px] uppercase tracking-[0.03em] mb-1.5">
                            {!! htmlspecialchars_decode($item['title']) !!}
                        </h2>

                        <div class="text-[13px] leading-[1.55] text-gray-500 mb-4 line-clamp-2">
                            {!! htmlspecialchars_decode($item['short_description'] ?? $item['description']) !!}
                        </div>

                        <button type="button" @click="selectedItem = @js($item['slug'])"
                            class="mt-auto self-start text-[12.5px] font-semibold text-emerald-700 hover:text-emerald-800 transition-colors">
                            {{ __('messages.view_details') }} &#8599;
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex flex-wrap items-center gap-6 mt-14 pt-8 border-t border-rule text-gray-400">
            <i class="text-2xl fa-brands fa-laravel"></i>
            <i class="text-2xl fa-brands fa-php"></i>
            <i class="text-2xl fa-brands fa-js"></i>
            <i class="text-2xl fa-brands fa-vuejs"></i>
            <i class="text-2xl fa-solid fa-microchip"></i>
        </div>
    </section>

    <x-portfolio-detail-modal :items="$portfolioItems" />
</div>
