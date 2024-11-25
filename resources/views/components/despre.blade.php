<section id="about" class="relative z-30 min-h-screen px-4 py-16 bg-white font-volkov" 
    x-data="{
        typewriter: 'Despre noi',
        currentParagraph: 0,
        paragraphs: [
            'Suntem o agentie de dezvoltare web din Baia Mare, specializată în aplicatii Laravel și integrări AI.',
            'Dezvoltăm solutii web rapide și scalabile, completate de servicii de marketing digital și publicitate online.',
            'Transformăm viziunea clientilor în rezultate extraordinare prin inovatie tehnică și creativitate.'
        ],
        startAnimation() {
            setInterval(() => {
                this.currentParagraph = (this.currentParagraph + 1) % this.paragraphs.length;
            }, 5000);
        }
    }"
    x-init="startAnimation()">
    <div class="mx-auto">
        <h2 class="font-volkov tracking-[4px] text-center font-normal text-4xl text-gray-900 mb-10 mt-4 md:mt-14"
            x-text="typewriter"></h2>

       
        <div class="max-w-3xl pb-8 mx-auto mb-16 text-2xl tracking-wide text-center text-gray-900 max-h-32">
            <template x-for="(paragraph, index) in paragraphs" :key="index">
                <p x-show="currentParagraph === index" x-text="paragraph"></p>
            </template>
        </div>

        <div class="max-w-3xl mx-auto mb-12">
            <div class="relative pb-[56.25%] h-0 overflow-hidden rounded-lg shadow-lg">
                <iframe 
                    class="absolute top-0 left-0 w-full h-full" 
                    src="https://www.youtube.com/embed/teU7OfHNHDY"
                    title="Cel mai recent proiect" 
                    loading="lazy"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <livewire:latest-projects />
    </div>
</section>