<section id="web-development" class="relative min-h-screen py-24 bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900"
    x-data="{
        activeTab: 'tall',
        isVisible: false
    }" x-init="setTimeout(() => isVisible = true, 300);
    $watch('activeTab', value => {
        isVisible = false;
        setTimeout(() => isVisible = true, 100);
    })">

    <!-- Background Pattern -->
    <div
        class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMyMDIwMjAiIGZpbGwtb3BhY2l0eT0iMC40Ij48cGF0aCBkPSJNMzYgMzRjMC0yIC45LTMuOSAyLjMtNS4yIDEuNC0xLjMgMy4yLTIuMSA1LjItMi4xIDEuOSAwIDMuOC44IDUuMiAyLjEgMS40IDEuMyAyLjMgMy4yIDIuMyA1LjIgMCAyLS45IDMuOS0yLjMgNS4yLTEuNCAxLjMtMy4yIDIuMS01LjIgMi4xLTEuOSAwLTMuOC0uOC01LjItMi4xQzM2LjkgMzcuOSAzNiAzNiAzNiAzNHoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-5">
    </div>

    <div class="container relative z-10 px-4 mx-auto max-w-7xl">
        <!-- Header Section -->
        <div class="mb-16 text-center">
            <span class="px-4 py-1.5 text-sm font-medium text-blue-400 bg-blue-500/10 rounded-full mb-4 inline-block">
                Web Development
            </span>
            <h2 class="mb-4 text-4xl font-bold tracking-wide text-white font-roboto-condensed">
                Transforming Ideas into <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">Digital
                    Experiences</span>
            </h2>
            <p class="max-w-2xl mx-auto text-lg italic text-gray-300 font-vollkorn">
                "Imagination is more important than knowledge."
            </p>
        </div>

        <!-- Tab Navigation -->
        <div class="flex justify-center mb-12">
            <nav class="inline-flex p-1 space-x-1 rounded-lg bg-gray-800/50">
                <button @click="activeTab = 'tall'"
                    :class="{ 'bg-gradient-to-r from-blue-500 to-blue-600 text-white': activeTab === 'tall', 'text-gray-400 hover:text-white hover:bg-gray-700/50': activeTab !== 'tall' }"
                    class="px-6 py-2.5 text-sm font-medium rounded-md transition-all duration-300">
                    TALL Stack
                </button>
                <button @click="activeTab = 'services'"
                    :class="{ 'bg-gradient-to-r from-blue-500 to-blue-600 text-white': activeTab === 'services', 'text-gray-400 hover:text-white hover:bg-gray-700/50': activeTab !== 'services' }"
                    class="px-6 py-2.5 text-sm font-medium rounded-md transition-all duration-300">
                    Web Services
                </button>
                <button @click="activeTab = 'ai'"
                    :class="{ 'bg-gradient-to-r from-blue-500 to-blue-600 text-white': activeTab === 'ai', 'text-gray-400 hover:text-white hover:bg-gray-700/50': activeTab !== 'ai' }"
                    class="px-6 py-2.5 text-sm font-medium rounded-md transition-all duration-300">
                    AI & LLM
                </button>
            </nav>
        </div>

        <!-- Tab Content -->
        <div class="relative" x-show="isVisible" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0">

            <!-- TALL Stack -->
            <div x-show="activeTab === 'tall'" class="grid gap-8 md:grid-cols-2">
                <div class="p-6 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div class="flex items-start mb-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 mr-4 text-blue-400 rounded-lg bg-blue-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Tailwind CSS</h3>
                            <p class="text-gray-400">Responsive and modern design</p>
                        </div>
                    </div>
                    <div class="pl-16">
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-blue-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Advanced customization
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-blue-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Performance optimization
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="p-6 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div class="flex items-start mb-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 mr-4 text-purple-400 rounded-lg bg-purple-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Alpine.js</h3>
                            <p class="text-gray-400">Dynamic interactivity</p>
                        </div>
                    </div>
                    <div class="pl-16">
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-purple-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Reactive behavior
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-purple-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Simplified DOM manipulation
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="p-6 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div class="flex items-start mb-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 mr-4 text-red-400 rounded-lg bg-red-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Laravel</h3>
                            <p class="text-gray-400">Robust and scalable backend</p>
                        </div>
                    </div>
                    <div class="pl-16">
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-red-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Modern architecture
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-red-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Advanced security
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="p-6 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div class="flex items-start mb-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 mr-4 text-green-400 rounded-lg bg-green-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Livewire</h3>
                            <p class="text-gray-400">Real-time updates</p>
                        </div>
                    </div>
                    <div class="pl-16">
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-green-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Dynamic components
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-green-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                SPA-like experience
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Web Services Content -->
            <div x-show="activeTab === 'services'" class="grid gap-8 md:grid-cols-2">
                <div class="p-6 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div class="flex items-start mb-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 mr-4 rounded-lg text-amber-400 bg-amber-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Optimized Websites</h3>
                            <p class="text-gray-400">Performance and modern design</p>
                        </div>
                    </div>
                    <div class="pl-16">
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-amber-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                SEO optimization
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-amber-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Responsive design
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-amber-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Fast loading
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="p-6 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div class="flex items-start mb-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 mr-4 rounded-lg text-cyan-400 bg-cyan-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Mobile Apps & PWA</h3>
                            <p class="text-gray-400">Advanced mobile solutions</p>
                        </div>
                    </div>
                    <div class="pl-16">
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-cyan-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Progressive Web Apps
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-cyan-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Cross-platform
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-cyan-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Offline mode
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="p-6 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div class="flex items-start mb-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 mr-4 text-pink-400 rounded-lg bg-pink-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Complex Web Applications</h3>
                            <p class="text-gray-400">Scalable enterprise solutions</p>
                        </div>
                    </div>
                    <div class="pl-16">
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-pink-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Scalable architecture
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-pink-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                API integrations
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-pink-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Cloud ready
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="p-6 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div class="flex items-start mb-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 mr-4 rounded-lg text-violet-400 bg-violet-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Admin Panels</h3>
                            <p class="text-gray-400">Full control and monitoring</p>
                        </div>
                    </div>
                    <div class="pl-16">
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-violet-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Custom dashboards
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-violet-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Advanced reports
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-violet-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                User management
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- AI & LLM Content -->
            <div x-show="activeTab === 'ai'" class="grid gap-8 md:grid-cols-2">
                <!-- AI Chatbots -->
                <div class="p-6 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div class="flex items-start mb-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 mr-4 text-blue-400 rounded-lg bg-blue-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Custom AI Chatbots</h3>
                            <p class="text-gray-400">Intelligent virtual assistance</p>
                        </div>
                    </div>
                    <div class="pl-16">
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-blue-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                GPT-4 integration
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-blue-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Multilingual support
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-blue-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Advanced customization
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- AI Automation -->
                <div class="p-6 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div class="flex items-start mb-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 mr-4 text-purple-400 rounded-lg bg-purple-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">AI Automation</h3>
                            <p class="text-gray-400">Business process optimization</p>
                        </div>
                    </div>
                    <div class="pl-16">
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-purple-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Workflow automation
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-purple-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Document processing
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-purple-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Data analysis
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Machine Learning -->
                <div class="p-6 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div class="flex items-start mb-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 mr-4 text-green-400 rounded-lg bg-green-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Machine Learning</h3>
                            <p class="text-gray-400">Advanced predictive solutions</p>
                        </div>
                    </div>
                    <div class="pl-16">
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-green-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Predictive models
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-green-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Sentiment analysis
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-green-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Automatic classification
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- AI Integrations -->
                <div class="p-6 border bg-gray-800/50 rounded-xl border-gray-700/50">
                    <div class="flex items-start mb-4">
                        <div
                            class="flex items-center justify-center w-12 h-12 mr-4 rounded-lg text-amber-400 bg-amber-500/10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Advanced AI Integrations</h3>
                            <p class="text-gray-400">Custom AI solutions</p>
                        </div>
                    </div>
                    <div class="pl-16">
                        <ul class="space-y-2 text-gray-300">
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-amber-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                AI API integrations
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-amber-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Custom AI Models
                            </li>
                            <li class="flex items-center">
                                <svg class="w-4 h-4 mr-2 text-amber-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                Auto-scaling
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            {{-- <div class="mt-16 text-center">
                <a href="#contact"
                    class="inline-flex items-center px-8 py-3 text-sm font-medium tracking-wider text-white uppercase transition-all duration-300 rounded-lg bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 group">
                    Free Consultation
                    <svg class="w-5 h-5 ml-2 transition-transform duration-300 group-hover:translate-x-1"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div> --}}
        </div>
    </div>
</section>
