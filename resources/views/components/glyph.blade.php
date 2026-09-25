{{-- Small filled shape used as a row marker in status panels. --}}
@props(['shape' => 'square'])

@php
    $hasCustomSize = (bool) preg_match('/(^|\s)w-/', (string) $attributes->get('class'));
@endphp

<svg {{ $attributes->class(['w-3 h-3' => ! $hasCustomSize, 'shrink-0']) }} viewBox="0 0 12 12" fill="currentColor" aria-hidden="true">
    @switch($shape)
        @case('triangle')
            <path d="M6 1l5.5 10H.5z" />
        @break

        @case('circle')
            <circle cx="6" cy="6" r="5" />
        @break

        @case('hexagon')
            <path d="M6 .5l5 2.9v5.2l-5 2.9-5-2.9V3.4z" />
        @break

        @case('diamond')
            <path d="M6 .5L11.5 6 6 11.5.5 6z" />
        @break

        @default
            <rect x="1" y="1" width="10" height="10" />
    @endswitch
</svg>
