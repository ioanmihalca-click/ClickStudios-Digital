<footer id="contact" class="py-16 text-white bg-gradient-to-r from-gray-800 to-gray-900">
    <div class="container px-4 mx-auto">
        <div class="grid grid-cols-1 gap-12 md:grid-cols-4">
            <!-- Contact Information -->
            <div class="text-center md:text-left">
                <h3 class="mb-6 text-xl font-bold text-emerald-400">Contact</h3>
                <ul class="space-y-4">
                    <li>
                        <a href="mailto:contact@clickstudios-digital.com"
                            class="flex items-center justify-center transition duration-300 md:justify-start hover:text-emerald-400">
                            <i class="mr-3 fas fa-envelope"></i> contact@clickstudios-digital.com
                        </a>
                    </li>
                    <li>
                        <a href="tel:+40734411115"
                            class="flex items-center justify-center transition duration-300 md:justify-start hover:text-emerald-400">
                            <i class="mr-3 fas fa-phone"></i> +4 0734 411 115
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/40734411115" target="_blank" rel="noopener noreferrer"
                            class="flex items-center justify-center transition duration-300 md:justify-start hover:text-emerald-400">
                            <i class="mr-3 fab fa-whatsapp"></i> WhatsApp
                        </a>
                    </li>
                    <li class="flex items-center justify-center md:justify-start">
                        <i class="mr-3 fas fa-map-marker-alt"></i>Baia-Mare, Maramures
                    </li>
                    <li class="flex items-center justify-center md:justify-start">
                     <x-modal-contact />
                     </li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="text-center md:text-left">
                <h3 class="mb-6 text-xl font-bold text-emerald-400">Link-uri Rapide</h3>
                <ul class="space-y-4">
                    <li><a href="/#about" class="transition duration-300 hover:text-emerald-400">Despre Noi</a></li>
                    <li><a href="/#servicii" class="transition duration-300 hover:text-emerald-400">Servicii</a></li>
                    <li><a href="/#portofoliu" class="transition duration-300 hover:text-emerald-400">Portofoliu</a>
                    </li>
                    <li><a href="/#contact" class="transition duration-300 hover:text-emerald-400">Contact</a></li>
                </ul>
            </div>

            <!-- Newsletter Subscription -->
            <x-newsletter />

            <!-- Social Media -->
            <div class="text-center md:text-right">
                <h3 class="mb-6 text-xl font-bold text-emerald-400">Urmăriți-ne</h3>
                <div class="flex justify-center space-x-6 md:justify-end">
                    <a href="https://www.facebook.com/profile.php?id=61560427317860" target="_blank"
                        rel="noopener noreferrer" class="text-gray-400 transition duration-300 hover:text-emerald-500">
                        <i class="text-3xl fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/clickstudios_digital/" target="_blank" rel="noopener noreferrer"
                        class="text-gray-400 transition duration-300 hover:text-emerald-500">
                        <i class="text-3xl fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>

        <hr class="my-10 border-gray-700">

        <div class="text-center">
            <p class="text-gray-400">&copy; <span x-text="new Date().getFullYear()"></span> <strong
                    class="font-semibold text-white">Click Studios Digital</strong>. Toate drepturile rezervate.</p>
        </div>
    </div>
</footer>
