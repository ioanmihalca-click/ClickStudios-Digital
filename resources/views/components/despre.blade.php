<section id="about" class="relative z-30 px-4 py-16 bg-white" 
         x-data="{ 
            show: false, 
            typewriter: '',
            fullText: 'Despre noi',
            typewriterSpeed: 100,
            stats: [
                { label: 'Proiecte Finalizate', value: 0, target: 37 },
                { label: 'Clienți Mulțumiți', value: 0, target: 37 },
                { label: 'Ani de Experiență', value: 0, target: 5 }
            ],
            currentParagraph: 0,
            paragraphs: [
                'Suntem o agenție de dezvoltare web și marketing digital cu sediul în Baia Mare, Maramures.',
                'Oferim o gamă completă de servicii de SEO și web design, publicitate online și marketing digital.',
                'Avem abilitatea de a combina arta și tehnologia pentru a crea rezultate extraordinare.'
            ],
            startAnimation() {
                this.show = true;
                this.animateTypewriter();
                this.animateStats();
                this.animateParagraphs();
            },
            animateTypewriter() {
                for (let i = 0; i <= this.fullText.length; i++) {
                    setTimeout(() => this.typewriter = this.fullText.substring(0, i), i * this.typewriterSpeed);
                }
            },
            animateStats() {
                this.stats.forEach(stat => {
                    let startValue = 0;
                    const duration = 2000;
                    const increment = (stat.target / duration) * 10;
                    const timer = setInterval(() => {
                        startValue += increment;
                        if (startValue >= stat.target) {
                            clearInterval(timer);
                            stat.value = stat.target;
                        } else {
                            stat.value = Math.floor(startValue);
                        }
                    }, 10);
                });
            },
            animateParagraphs() {
                setInterval(() => {
                    this.currentParagraph = (this.currentParagraph + 1) % this.paragraphs.length;
                }, 5000);
            }
         }" 
         x-init="
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        startAnimation();
                        observer.unobserve($el);
                    }
                });
            }, { threshold: 0.5 });
            observer.observe($el);
         "
>
    <div class="max-w-3xl mx-auto">
        <h2
            class="font-roboto-condensed uppercase tracking-[4px] text-center font-normal text-3xl text-gray-900 mb-10 mt-4 md:mt-14"
            x-text="typewriter"
        ></h2>

        <div class="h-24 mb-12 text-2xl tracking-wide text-center text-gray-900 md:mb-8 md:mb-16 font-volkov"
             x-show="show"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 transform translate-y-10"
             x-transition:enter-end="opacity-100 transform translate-y-0">
            <template x-for="(paragraph, index) in paragraphs" :key="index">
                <p x-show="currentParagraph === index" 
                   x-transition:enter="transition ease-out duration-500"
                   x-transition:enter-start="opacity-0 transform translate-y-10"
                   x-transition:enter-end="opacity-100 transform translate-y-0"
                   x-transition:leave="transition ease-in duration-300"
                   x-transition:leave-start="opacity-100 transform translate-y-0"
                   x-transition:leave-end="opacity-0 transform translate-y-10"
                   x-text="paragraph"></p>
            </template>
        </div>

        <div class="grid grid-cols-1 gap-6 mb-12 md:grid-cols-3"
             x-show="show"
             x-transition:enter="transition ease-out duration-1000 delay-500"
             x-transition:enter-start="opacity-0 transform translate-y-10"
             x-transition:enter-end="opacity-100 transform translate-y-0">
            <template x-for="stat in stats" :key="stat.label">
                <div class="text-center">
                    <div class="text-4xl font-bold text-emerald-600" x-text="stat.value"></div>
                    <div class="text-gray-600" x-text="stat.label"></div>
                </div>
            </template>
        </div>

        <div class="flex justify-center mb-48"
             x-show="show"
             x-transition:enter="transition ease-out duration-1000 delay-1000"
             x-transition:enter-start="opacity-0 transform translate-y-10"
             x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="w-full sm:w-2/12 sm:mx-auto">
                <div class="text-3xl text-center hover:text-emerald-500 animate-bounce">
                    <a href="#dezvoltare-web" class="scroll-link">
                        <i class="fa fa-angle-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>