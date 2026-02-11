<div class="relative w-full h-full overflow-hidden font-inter">
    {{-- Content --}}
    <div class="relative z-10 flex flex-col justify-between h-full px-4 pt-10 pb-2 mx-auto max-w-5xl md:pt-14">
        <!-- Hero Section -->
        <section class="flex flex-col items-start justify-center grow-0 mt-2 md:mt-6">
            <h1 class="mb-3 uppercase tracking-wide leading-none font-jakarta">
                <span class="block mb-1 text-2xl font-extrabold text-emerald-700 md:text-4xl lg:text-5xl">
                    {{ __('messages.hero.company_name') }}
                </span>
                <span class="block text-2xl font-bold text-gray-900 md:text-3xl lg:text-5xl leading-[1.1]">
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
        <section class="flex-shrink-0 text-center w-full">
            <h2 class="mb-1 mt-8 text-md uppercase tracking-wide text-gray-700 md:text-lg md:mb-2 ">
                {{ __('messages.enterprise.title') }}
            </h2>


        </section>

    </div>

    <!-- Footer -->
    <footer class="fixed bottom-0 left-0 right-0 z-30 w-full border-t border-gray-200 bg-transparent px-4 py-2">
        <div class="flex items-center justify-between mx-auto max-w-5xl">
            <!-- Social Links -->
            <div class="flex items-center gap-4">
                <a href="https://www.tiktok.com/@clickstudiosdigital" target="_blank" rel="noopener noreferrer"
                    class="text-gray-500 hover:text-gray-900 transition-colors">
                    <i class="fa-brands fa-tiktok text-lg"></i>
                </a>
                <a href="https://www.youtube.com/@clickstudiosdigital" target="_blank" rel="noopener noreferrer"
                    class="text-gray-500 hover:text-gray-900 transition-colors">
                    <i class="fa-brands fa-youtube text-lg"></i>
                </a>
            </div>

            <!-- Logo -->
            <img src="{{ asset('assets/logo.jpg') }}" alt="Click Studios Digital" class="h-8">

            <!-- Contact -->
            <div class="flex items-center gap-2 text-xs text-gray-500">
                <span class="hidden md:inline">{{ __('messages.footer.contact_info') }}</span>
                <a href="mailto:contact@clickstudiosdigital.com"
                    class="text-gray-700 hover:text-emerald-600 transition-colors">
                    contact@clickstudiosdigital.com
                </a>
            </div>
        </div>
    </footer>
</div>
