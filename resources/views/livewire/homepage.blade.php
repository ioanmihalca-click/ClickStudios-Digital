<div class="relative w-full h-full overflow-hidden font-inter">
    {{-- Content --}}
    <div class="relative z-10 flex flex-col justify-between h-full px-4 pt-10 pb-2 mx-auto max-w-5xl md:pt-14">
        <!-- Hero Section -->
        <section
            class="flex flex-col items-start justify-center grow-0 mt-10 md:mt-6 max-w-[280px] ml-auto md:max-w-none md:mx-0">
            <h1 class="mb-3 uppercase tracking-wide leading-none font-jakarta">
                <span class="block mb-1 text-lg font-extrabold text-emerald-700 md:text-4xl lg:text-5xl">
                    {{ __('messages.hero.company_name') }}
                </span>
                <span class="block text-lg font-bold text-gray-900 md:text-3xl lg:text-5xl leading-[1.1]">
                    {{ __('messages.hero.title') }} <br /> {{ __('messages.hero.title-gradient') }}
                </span>
            </h1>

            <p class="max-w-lg mb-5 text-sm text-gray-600 md:text-lg leading-snug">
                {{ __('messages.hero.subtitle') }}
            </p>

        </section>

        <!-- Featured Apps (Center) - Compact -->
        <section id="featured" class="flex-grow w-full flex items-center justify-center py-1">
            <livewire:featured-apps />
        </section>

        <!-- Enterprise AI Section (Bottom) -->
        {{-- <section class="flex-shrink-0 text-center w-full">
            <h2 class="mb-1 mt-8 text-md uppercase tracking-wide text-gray-700 md:text-lg md:mb-2 ">
                {{ __('messages.enterprise.title') }}
            </h2> --}}


        </section>

    </div>
</div>
