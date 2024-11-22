<section id="about" class="relative z-30 min-h-screen px-4 py-16 bg-white" x-data="{
    show: false,
    typewriter: '',
    fullText: 'Despre noi',
    typewriterSpeed: 100,
    currentParagraph: 0,
    paragraphs: [
        'Suntem o agentie de dezvoltare web din Baia Mare, specializată în aplicatii Laravel și integrări AI.',
        'Dezvoltăm solutii web rapide și scalabile, completate de servicii de marketing digital și publicitate online.',
        'Transformăm viziunea clientilor în rezultate extraordinare prin inovatie tehnică și creativitate.'
    ],
    startAnimation() {
        this.show = true;
        this.animateTypewriter();
        this.animateParagraphs();
    },
    animateTypewriter() {
        for (let i = 0; i <= this.fullText.length; i++) {
            setTimeout(() => this.typewriter = this.fullText.substring(0, i), i * this.typewriterSpeed);
        }
    },
    animateParagraphs() {
        setInterval(() => {
            this.currentParagraph = (this.currentParagraph + 1) % this.paragraphs.length;
        }, 5000);
    }
}"
    x-init="const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startAnimation();
                observer.unobserve($el);
            }
        });
    }, { threshold: 0.5 });
    observer.observe($el);">
    <div class="mx-auto">
        <h2 class="font-roboto-condensed uppercase tracking-[4px] text-center font-normal text-3xl text-gray-900 mb-10 mt-4 md:mt-14"
            x-text="typewriter"></h2>

        <div class="h-24 max-w-3xl mx-auto mb-12 text-2xl tracking-wide text-center text-gray-900 md:mb-16 font-volkov"
            x-show="show" x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="opacity-0 transform translate-y-10"
            x-transition:enter-end="opacity-100 transform translate-y-0">
            <template x-for="(paragraph, index) in paragraphs" :key="index">
                <p x-show="currentParagraph === index" x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-y-10"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform translate-y-10" x-text="paragraph"></p>
            </template>
        </div>

        <div class="max-w-3xl mx-auto mb-12" x-show="show"
            x-transition:enter="transition ease-out duration-1000 delay-500"
            x-transition:enter-start="opacity-0 transform translate-y-10"
            x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="relative pb-[56.25%] h-0 overflow-hidden rounded-lg shadow-lg">
                <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/teU7OfHNHDY"
                    title="Cel mai recent proiect" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <livewire:latest-projects />
        {{-- 
        <div class="flex justify-center mt-12"
             x-show="show"
             x-transition:enter="transition ease-out duration-1000 delay-1000"
             x-transition:enter-start="opacity-0 transform translate-y-10"
             x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="w-full sm:w-2/12 sm:mx-auto">
                <div class="text-3xl text-center hover:text-emerald-500 animate-bounce">
                    <a href="#contact">
                        <i class="fa fa-angle-down"></i>
                    </a>
                </div>
            </div>
        </div> --}}
    </div>
</section>
