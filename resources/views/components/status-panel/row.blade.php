{{-- One status-panel row: glyph, mono name, meta on the right (the slot overrides `meta`). --}}
@props(['name', 'glyph' => 'square', 'meta' => null, 'href' => null, 'external' => false])

@php
    $tag = $href ? 'a' : 'div';
@endphp

<{{ $tag }}
    @if ($href) href="{{ $href }}" @if ($external) target="_blank" rel="noopener noreferrer" @elseif (! preg_match('/^(mailto|tel):/', $href)) wire:navigate @endif @endif
    {{ $attributes->class([
        'grid grid-cols-[12px_minmax(0,max-content)_minmax(0,1fr)] items-center gap-x-3 px-4 py-3',
        'group transition-colors hover:bg-row-hover' => $href,
    ]) }}>
    <x-glyph :shape="$glyph" class="text-gray-900" />

    <span @class([
        'font-mono font-bold text-[12.5px] uppercase tracking-[0.04em] text-gray-900 truncate',
        'group-hover:text-emerald-700' => $href,
    ])>{{ $name }}</span>

    <span class="flex flex-wrap items-center justify-end gap-1.5 font-mono text-[11.5px] text-right text-gray-500">
        {{ $slot->isEmpty() ? $meta : $slot }}
    </span>
</{{ $tag }}>
