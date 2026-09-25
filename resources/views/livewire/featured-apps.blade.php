<section id="proiecte" class="max-w-[1280px] mx-auto px-6 md:px-12 py-14 border-b border-rule">
    <div class="flex flex-wrap items-end justify-between gap-4 mb-7">
        <div>
            <x-eyebrow class="mb-2">{{ __('messages.menu.portfolio') }}</x-eyebrow>
            <h2 class="font-mono font-extrabold text-[22px] md:text-[26px] uppercase tracking-[-0.01em]">
                {{ __('messages.featured.title') }}
            </h2>
        </div>
        <a href="{{ route('portfolio', ['locale' => App::getLocale()]) }}" wire:navigate
            class="inline-flex items-center gap-2 font-mono text-[12px] font-bold uppercase tracking-[0.08em] text-emerald-700 transition-colors hover:text-emerald-800">
            {{ __('messages.featured.view_all') }}
            <x-arrow />
        </a>
    </div>

    <div class="grid grid-cols-[repeat(auto-fit,minmax(min(300px,100%),1fr))] gap-6">
        @foreach ($featuredApps as $item)
            <x-portfolio-card :item="$item" :index="$loop->iteration" :heading-level="3"
                wire:key="featured-{{ $item->id }}" />
        @endforeach
    </div>
</section>
