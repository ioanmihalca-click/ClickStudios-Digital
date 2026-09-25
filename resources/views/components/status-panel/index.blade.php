{{-- Bordered panel with a small mono header (label left, live status right) and divided rows. --}}
@props(['label', 'status' => null])

<div {{ $attributes->class('bg-white border border-rule rounded-lg overflow-hidden') }}>
    <div
        class="flex items-center justify-between gap-4 px-4 py-3 border-b border-rule bg-canvas font-mono text-[10.5px] tracking-[0.16em] uppercase text-gray-400">
        <span class="truncate">{{ $label }}</span>

        @if ($status)
            <span class="flex items-center gap-1.5 shrink-0 text-gray-600">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 motion-safe:animate-pulse"></span>
                {{ $status }}
            </span>
        @endif
    </div>

    <div class="divide-y divide-rule">
        {{ $slot }}
    </div>
</div>
