@props(['direction' => 'right'])

@php
    $hasCustomSize = (bool) preg_match('/(^|\s)w-/', (string) $attributes->get('class'));
@endphp

<svg {{ $attributes->class(['w-3.5 h-3.5' => ! $hasCustomSize, 'shrink-0']) }} viewBox="0 0 16 16" fill="none" stroke="currentColor"
    stroke-width="1.6" stroke-linecap="square" aria-hidden="true">
    @switch($direction)
        @case('left')
            <path d="M14 8H3M7 4L3 8l4 4" />
        @break

        @case('up-right')
            <path d="M4.5 11.5l7-7M6 4.5h5.5V10" />
        @break

        @default
            <path d="M2 8h11M9 4l4 4-4 4" />
    @endswitch
</svg>
