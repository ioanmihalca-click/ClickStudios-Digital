<div>
    <x-page-header :eyebrow="__('messages.portfolio.title')">
        <x-slot:title>
            {{ __('messages.portfolio.statement') }}
            <span class="text-emerald-600">{{ __('messages.portfolio.statement_highlight') }}</span>
        </x-slot:title>
        <x-slot:subtitle>{{ __('messages.portfolio.subtitle') }}</x-slot:subtitle>
    </x-page-header>

    <section class="max-w-[1280px] mx-auto px-6 md:px-12 py-14">
        <div class="grid grid-cols-[repeat(auto-fit,minmax(min(300px,100%),1fr))] gap-6">
            @foreach ($portfolioItems as $item)
                <x-portfolio-card :item="$item" :index="$loop->iteration" wire:key="portfolio-{{ $item->id }}" />
            @endforeach
        </div>
    </section>
</div>
