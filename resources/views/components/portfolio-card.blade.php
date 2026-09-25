{{-- Project card linking to the project page. Used on the homepage and on /portfolio. --}}
@props(['item', 'index', 'headingLevel' => 2])

@php
    $statusDotColors = [
        'live' => 'bg-emerald-500',
        'beta' => 'bg-amber-500',
        'in-development' => 'bg-gray-400',
        'archived' => 'bg-gray-300',
    ];
    $category = $item->getLocalizedCategory();
    $stack = array_slice($item->stack ?? [], 0, 4);
@endphp

<a href="{{ route('portfolio.show', ['locale' => App::getLocale(), 'portfolioItem' => $item->slug]) }}" wire:navigate
    {{ $attributes->class('group flex flex-col bg-white border border-gray-900 rounded-lg overflow-hidden transition-shadow duration-150 hover:shadow-[4px_4px_0_#d1d5db]') }}>

    {{-- Window bar --}}
    <div
        class="flex items-center justify-between gap-3 px-4 py-2.5 border-b border-rule font-mono text-[10.5px] tracking-[0.16em] uppercase text-gray-400">
        <span class="truncate">// {{ sprintf('%02d', $index) }}@if ($category) · {{ $category }}@endif</span>

        @if ($item->status)
            <span class="flex items-center gap-1.5 shrink-0 text-gray-600">
                <span class="w-1.5 h-1.5 rounded-full {{ $statusDotColors[$item->status->value] }}"></span>
                {{ $item->status->label() }}
            </span>
        @endif
    </div>

    @if ($item->image)
        <div class="shrink-0 aspect-video overflow-hidden border-b border-rule">
            <img src="{{ Storage::url($item->image) }}" alt="{{ $item->getLocalizedTitle() }}" loading="lazy"
                class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-[1.02]">
        </div>
    @endif

    <div class="flex flex-col grow pt-5 px-[22px] pb-[22px]">
        <h{{ $headingLevel }} class="mb-2 font-mono font-bold text-[15px] uppercase tracking-[0.02em] text-gray-900">
            {{ $item->getLocalizedTitle() }}
        </h{{ $headingLevel }}>

        <p class="mb-4 text-[13px] leading-[1.55] text-gray-500 line-clamp-3">
            {{ $item->getLocalizedShortDescription() }}
        </p>

        @if ($stack)
            <ul class="flex flex-wrap gap-1.5 mb-5">
                @foreach ($stack as $technology)
                    <li
                        class="px-2 py-[3px] border border-rule rounded-[4px] font-mono text-[10.5px] uppercase tracking-[0.06em] text-gray-500">
                        {{ $technology }}
                    </li>
                @endforeach
            </ul>
        @endif

        <span
            class="inline-flex items-center gap-2 mt-auto self-start font-mono text-[12px] font-bold uppercase tracking-[0.08em] text-emerald-700 transition-colors group-hover:text-emerald-800">
            {{ __('messages.portfolio.case_study') }}
            <x-arrow class="transition-transform group-hover:translate-x-0.5" />
        </span>
    </div>
</a>
