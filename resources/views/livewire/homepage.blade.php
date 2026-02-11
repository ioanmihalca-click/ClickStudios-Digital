<div class="w-full relative bg-top bg-no-repeat bg-cover font-roboto-condensed overflow-x-hidden"
    style="background-image: url('{{ asset('assets/bg/desktop.webp') }}');">
    
    <style>
        @media (max-width: 768px) {
            .bg-custom-mobile {
                background-image: url('{{ asset('assets/bg/mobile.webp') }}') !important;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center top;
            }
        }
    </style>

    <div class="bg-custom-mobile absolute inset-0 z-0 md:hidden"></div>

    <div class="relative z-10 flex flex-col justify-between min-h-screen pt-24 pb-8 md:pt-28 md:pb-4 container mx-auto px-4">
        <!-- Hero Section -->
        <section class="flex flex-col items-center justify-center text-center flex-grow-0 mb-4 md:mb-8">
            <h1 class="mb-2 tracking-tight uppercase leading-none">
                <span class="block text-2xl font-extrabold text-emerald-600 md:text-4xl lg:text-5xl mb-1">
                    Click Studios Digital:
                </span>
                <span class="block text-3xl font-black text-gray-900 md:text-5xl lg:text-6xl leading-tight">
                    Transformăm Ideile în <br /> Experiențe Digitale
                </span>
            </h1>
            
            <p class="max-w-2xl mx-auto mb-4 text-base text-gray-600 md:text-lg font-medium leading-tight">
                Dezvoltăm aplicații personalizate, cu expertiză în Laravel și integrări avansate <br class="hidden md:block" /> de Inteligență Artificială.
            </p>
            
            <a href="#featured" 
                class="inline-block px-6 py-2 text-xs md:text-sm font-bold tracking-widest text-white uppercase transition-transform duration-300 rounded-full bg-emerald-500 hover:bg-emerald-600 hover:scale-105 shadow-lg shadow-emerald-500/30">
                Vezi Proiectul
            </a>
        </section>

        <!-- Featured Apps -->
        <section id="featured" class="w-full mb-4 md:mb-2">
            <livewire:featured-apps />
        </section>

        <!-- Enterprise AI Section -->
        <section class="text-center mt-auto">
            <h2 class="mb-8 text-xl font-bold uppercase tracking-wider text-gray-900 md:text-3xl">
                Proiecte Enterprise Integrați AI
            </h2>
            
            <!-- Spacer for Background Icons/Flow -->
            <!-- We keep this transparency to let the background flow show through -->
            <div class="h-24 md:h-32 w-full flex items-center justify-center">
                 <!-- The background image has the flow icons, so we keep this empty or minimal -->
            </div>

            <div class="mt-4">
                <a href="{{ route('contact', ['locale' => App::getLocale()]) }}" wire:navigate
                    class="inline-block px-8 py-3 text-xs md:text-sm font-bold tracking-widest text-white uppercase transition-transform duration-300 bg-gray-900 rounded-full hover:bg-gray-800 hover:scale-105 shadow-xl">
                    Contactează-ne pentru următorul tău proiect
                </a>
            </div>

            <div class="mt-4 md:mt-6 text-right text-xs text-gray-500 md:absolute md:bottom-4 md:right-4">
                <p>Contact info: <a href="mailto:contact@clickstudios-digital.com" class="hover:text-emerald-600">contact@clickstudios-digital.com</a></p>
             </div>
        </section>
    </div>
</div>
