{{--
    Header for every page except the homepage: meta bar, eyebrow, h1, optional
    subtitle, optional right-hand `aside`. The h1 sits one step below the hero.
--}}
@props(['eyebrow', 'meta' => null, 'metaIndex' => null, 'metaTotal' => null])

<header {{ $attributes->class('max-w-[1280px] mx-auto px-6 md:px-12 pt-8 pb-14 border-b border-rule') }}>
    <x-page-meta :label="$meta ?? __('messages.brand') . ' / ' . $eyebrow" :index="$metaIndex" :total="$metaTotal" class="mb-14 md:mb-16" />

    <div @class(['grid grid-cols-1 gap-10 lg:gap-12', 'lg:grid-cols-[minmax(0,1fr)_340px]' => isset($aside)])>
        <div>
            <x-eyebrow class="mb-[22px]">{{ $eyebrow }}</x-eyebrow>

            <h1
                class="font-mono font-extrabold text-[26px] md:text-[clamp(34px,3.8vw,52px)] leading-[1.08] tracking-[-0.02em] uppercase text-gray-900 text-balance">
                {{ $title }}
            </h1>

            @isset($subtitle)
                <p class="mt-6 max-w-[640px] text-[17px] leading-[1.6] text-gray-600 text-pretty">
                    {{ $subtitle }}
                </p>
            @endisset
        </div>

        @isset($aside)
            <div>
                {{ $aside }}
            </div>
        @endisset
    </div>
</header>
