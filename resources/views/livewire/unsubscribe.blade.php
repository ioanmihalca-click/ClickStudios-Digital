<div class="max-w-2xl p-6 mx-auto my-8 bg-white rounded-lg shadow-md">
    @if ($error)
        <div class="p-4 mb-4 text-red-700 bg-red-100 border-l-4 border-red-500" role="alert">
            <p>{{ is_string($error) ? $error : 'A apărut o eroare. Vă rugăm să încercați din nou.' }}</p>
        </div>
    @elseif ($unsubscribed)
        <h2 class="mb-4 text-2xl font-bold text-gray-800">Dezabonare reușită</h2>
        <p class="mb-4 text-gray-600">V-ați dezabonat cu succes de la newsletter-ul nostru. Ne pare rău să vă vedem plecând!</p>
        <button wire:click="resubscribe" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
            Reabonare
        </button>
    @elseif ($subscriber && $subscriber->is_active)
        <h2 class="mb-4 text-2xl font-bold text-gray-800">Confirmare dezabonare</h2>
        <p class="mb-4 text-gray-600">Sunteți sigur că doriți să vă dezabonați de la newsletter-ul nostru?</p>
        <button wire:click="unsubscribe" class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">
            Confirmă dezabonarea
        </button>
    @elseif ($subscriber && !$subscriber->is_active)
        <h2 class="mb-4 text-2xl font-bold text-gray-800">Deja dezabonat</h2>
        <p class="mb-4 text-gray-600">Sunteți deja dezabonat de la newsletter-ul nostru.</p>
        <button wire:click="resubscribe" class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">
            Reabonare
        </button>
    @endif
</div>