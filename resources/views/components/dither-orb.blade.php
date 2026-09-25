{{--
    Decorative mascot: a shaded sphere turned into 1-bit stochastic dither.
    radialGradient (shading) + fractal noise, thresholded to black/white, then
    black becomes night ink and white becomes transparent so the grid shows through.
--}}
@php
    $orbId = 'orb-'.Str::random(6);
@endphp

<svg {{ $attributes->class('block') }} viewBox="0 0 240 240" aria-hidden="true" focusable="false">
    <defs>
        <radialGradient id="{{ $orbId }}-shade" cx="0.36" cy="0.3" r="0.8">
            <stop offset="0" stop-color="#ffffff" />
            <stop offset="0.25" stop-color="#c4c4c4" />
            <stop offset="0.6" stop-color="#3c3c3c" />
            <stop offset="1" stop-color="#000000" />
        </radialGradient>

        <filter id="{{ $orbId }}-dither" x="0" y="0" width="240" height="240" filterUnits="userSpaceOnUse"
            color-interpolation-filters="sRGB">
            <feTurbulence type="fractalNoise" baseFrequency="1.15" numOctaves="1" seed="7" result="noise" />
            <feColorMatrix in="noise" type="matrix"
                values="1 0 0 0 0  1 0 0 0 0  1 0 0 0 0  0 0 0 0 1" result="grain" />
            <feComposite in="SourceGraphic" in2="grain" operator="arithmetic" k1="0" k2="1" k3="1.6" k4="-0.8"
                result="shaded-grain" />
            <feComponentTransfer in="shaded-grain" result="one-bit">
                <feFuncR type="discrete" tableValues="0 1" />
                <feFuncG type="discrete" tableValues="0 1" />
                <feFuncB type="discrete" tableValues="0 1" />
            </feComponentTransfer>
            <feColorMatrix in="one-bit" type="matrix"
                values="0 0 0 0 0.047  0 0 0 0 0.071  0 0 0 0 0.063  -1 0 0 0 1" />
        </filter>

        <clipPath id="{{ $orbId }}-clip">
            <circle cx="120" cy="120" r="104" />
        </clipPath>
    </defs>

    <g clip-path="url(#{{ $orbId }}-clip)">
        <rect width="240" height="240" fill="url(#{{ $orbId }}-shade)" filter="url(#{{ $orbId }}-dither)" />
    </g>

    <g class="orb-eyes" fill="#ffffff" stroke="#0c1210" stroke-width="3">
        <rect x="134" y="86" width="14" height="28" rx="7" />
        <rect x="162" y="86" width="14" height="28" rx="7" />
    </g>
</svg>
