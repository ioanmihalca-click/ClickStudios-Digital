<div class="relative w-full h-full overflow-hidden font-roboto-condensed">
    {{-- Content --}}
    <div class="relative z-10 flex flex-col justify-between h-full px-4 pt-20 pb-2 mx-auto max-w-5xl md:pt-24">
        <!-- Hero Section -->
        <section class="flex flex-col items-center justify-center flex-grow-0 mt-2 text-center md:mt-4">
            <h1 class="mb-1 uppercase tracking-tight leading-none">
                <span class="block mb-1 text-2xl font-extrabold text-emerald-600 md:text-5xl lg:text-6xl">
                    Click Studios Digital:
                </span>
                <span class="block text-3xl font-black text-gray-900 md:text-6xl lg:text-7xl leading-tight">
                    Transformăm Ideile în <br /> Experiențe Digitale
                </span>
            </h1>
            
            <p class="max-w-3xl mx-auto mb-4 text-sm font-medium text-gray-600 md:text-lg leading-tight">
                Dezvoltăm aplicații personalizate, cu expertiză în Laravel și integrări avansate <br class="hidden md:block" /> de Inteligență Artificială.
            </p>
            
            <a href="#featured" 
                class="inline-block px-6 py-2 text-xs font-bold tracking-widest text-white uppercase transition-transform duration-300 rounded-full bg-emerald-500 hover:bg-emerald-600 hover:scale-105 shadow-lg shadow-emerald-500/30 md:text-sm">
                Vezi Proiectul
            </a>
        </section>

        <!-- Featured Apps (Center) - Compact -->
        <section id="featured" class="flex-grow w-full flex items-center justify-center py-1">
            <livewire:featured-apps />
        </section>

        <!-- Enterprise AI Section (Bottom) -->
        <section class="flex-shrink-0 text-center w-full">
            <h2 class="mb-1 text-base font-bold uppercase tracking-wider text-gray-900 md:text-xl md:mb-2">
                Proiecte Enterprise & Integrări AI
            </h2>
            
            <!-- Spacer for Background Icons/Flow - Adjusted height for better fit -->
            <div class="w-full h-16 md:h-24 lg:h-28"></div>

            <div class="flex flex-col items-center justify-center gap-3 pb-2 md:flex-row md:pb-4">
                <a href="{{ route('contact', ['locale' => App::getLocale()]) }}" wire:navigate
                    class="inline-block px-6 py-2 text-xs font-bold tracking-widest text-white uppercase transition-transform duration-300 bg-gray-900 rounded-full hover:bg-gray-800 hover:scale-105 shadow-xl md:text-sm md:px-8 md:py-3">
                    Contactează-ne
                </a>
            </div>
             <!-- Contact Info absolute bottom right to not interfere -->
             <div class="absolute bottom-2 right-4 text-[10px] text-gray-500 md:text-xs">
                <a href="mailto:contact@clickstudios-digital.com" class="hover:text-emerald-600 transition-colors">contact@clickstudios-digital.com</a>
             </div>
        </section>
    </div>
</div>
