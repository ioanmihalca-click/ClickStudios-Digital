{{--
    Link button. Variants: primary (night + emerald hard shadow), secondary (outline),
    emerald (for dark bands). Hover "presses" the button: offset = shadow before − after.
--}}
@props(['href', 'variant' => 'primary', 'external' => false])

@php
    $variantClasses = [
        'primary' => 'bg-night text-emerald-50 hover:text-emerald-50 px-[26px] py-[15px] shadow-[3px_3px_0_#059669] hover:shadow-[1px_1px_0_#059669] hover:translate-x-[2px] hover:translate-y-[2px]',
        'secondary' => 'bg-white border border-night text-night hover:text-night px-6 py-[14px] hover:shadow-[3px_3px_0_#d1d5db]',
        'emerald' => 'bg-emerald-500 text-on-emerald hover:text-on-emerald px-7 py-4 shadow-[3px_3px_0_rgba(240,253,244,0.9)] hover:shadow-[1px_1px_0_rgba(240,253,244,0.9)] hover:translate-x-[2px] hover:translate-y-[2px]',
    ];
@endphp

<a href="{{ $href }}"
    @if ($external) target="_blank" rel="noopener noreferrer" @else wire:navigate @endif
    {{ $attributes->class([
        'inline-flex items-center justify-center gap-[10px] rounded-[4px] font-mono font-bold text-[13px] uppercase tracking-[0.06em] transition-all duration-[120ms]',
        $variantClasses[$variant],
    ]) }}>
    {{ $slot }}
</a>
