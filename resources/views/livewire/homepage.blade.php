<div>
    <style>
        @media (max-width: 768px) {
            .hero-section {
                background-image: url('{{ asset('assets/bg/mobile.webp') }}') !important;
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section relative flex items-center min-h-screen pt-20 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('assets/bg/desktop.webp') }}')">
        <div class="container relative z-10 px-4 mx-auto">
            <div class="max-w-3xl">
                <h1 class="mb-4 text-4xl font-bold tracking-tight uppercase md:text-5xl lg:text-6xl text-gray-900">
                    <span class="block">{{ __('messages.hero.company_name') }}</span>
                    <span class="block">{{ __('messages.hero.title') }}</span>
                    <span class="block text-emerald-600">{{ __('messages.hero.title-gradient') }}</span>
                </h1>
                <p class="max-w-2xl mb-8 text-lg text-gray-600 md:text-xl">
                    {{ __('messages.hero.subtitle') }}
                </p>
                <a href="#about"
                    class="inline-block px-8 py-3 text-sm font-semibold tracking-wider text-white uppercase transition-all duration-300 rounded-full bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                    {{ __('messages.hero.discover_button') }}
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Apps -->
    <section id="about">
        <livewire:featured-apps />
    </section>
</div>
