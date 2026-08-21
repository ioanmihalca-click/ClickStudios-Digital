<section id="proiecte" class="max-w-[1280px] mx-auto px-6 md:px-12 py-14 border-b border-rule"
    x-data="{ selectedItem: null }">

    <div class="flex flex-wrap items-baseline justify-between gap-4 mb-7">
        <h2 class="font-jakarta font-extrabold text-[26px] uppercase tracking-[0.01em]">
            {{ __('messages.featured.title') }}
        </h2>
        <a href="{{ route('portfolio', ['locale' => App::getLocale()]) }}" wire:navigate
            class="text-[13.5px] font-semibold text-emerald-700 hover:text-emerald-800 transition-colors">
            {{ __('messages.featured.view_all') }} &#8599;
        </a>
    </div>

    <div class="grid grid-cols-[repeat(auto-fit,minmax(min(300px,100%),1fr))] gap-6">
        @foreach ($featuredApps->take(3) as $item)
            <div
                class="flex flex-col bg-white border border-gray-900 rounded-lg overflow-hidden transition-shadow duration-150 hover:shadow-[4px_4px_0_#d1d5db]">
                @if ($item['image'])
                    <div class="shrink-0 aspect-video overflow-hidden border-b border-rule">
                        <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['title'] }}"
                            class="object-cover w-full h-full">
                    </div>
                @endif

                <div class="flex flex-col flex-grow pt-5 px-[22px] pb-[22px]">
                    <h3 class="font-jakarta font-bold text-[15px] uppercase tracking-[0.03em] mb-1.5">
                        {!! htmlspecialchars_decode($item['title']) !!}
                    </h3>

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

    <x-portfolio-detail-modal :items="$featuredApps" />
</section>
