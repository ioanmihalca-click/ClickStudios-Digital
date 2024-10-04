<div class="text-center md:text-left">
                <h3 class="mb-6 text-xl font-bold text-emerald-400">Abonează-te la Newsletter</h3>
                <p class="mb-4 text-sm">Primește cele mai recente noutăți și oferte direct în inbox-ul tău.</p>
                <form action="{{ route('subscribers.store') }}" method="POST" class="flex flex-col space-y-4">
                    @csrf
                    <input type="email" name="email" placeholder="Adresa ta de email" required
                        class="px-4 py-2 text-gray-800 bg-white rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-400">
                    <button type="submit"
                        class="px-4 py-2 font-semibold text-white transition duration-300 rounded-md bg-emerald-500 hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:ring-offset-2 focus:ring-offset-gray-800">
                        Abonează-te
                    </button>
                </form>
                @if (session('success'))
                    <div class="mt-2 text-sm text-emerald-400">
                        {{ session('success') }}
                    </div>
                @endif
            </div>