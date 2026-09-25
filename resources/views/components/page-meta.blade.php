@props(['label', 'index' => null, 'total' => null])

@php
    $pages = config('site.pages');
    $pagePosition = array_search(Route::currentRouteName(), $pages, true);
    $index ??= $pagePosition === false ? null : $pagePosition + 1;
    $total ??= count($pages);
@endphp

<div {{ $attributes->class('flex items-center justify-between gap-4 font-mono text-[11px] tracking-[0.16em] uppercase text-gray-500') }}>
    <span class="flex items-center min-w-0 gap-2">
        <svg class="w-3.5 h-3.5 shrink-0 text-gray-900" viewBox="0 0 16 16" fill="none" stroke="currentColor"
            stroke-width="1.5" aria-hidden="true">
            <circle cx="8" cy="8" r="6.25" />
            <path d="M3.6 12.4l8.8-8.8" />
        </svg>
        <span class="truncate">// {{ $label }}</span>
    </span>

    @if ($index)
        <span class="shrink-0 tabular-nums">{{ sprintf('%02d / %02d', $index, $total) }}</span>
    @endif
</div>
