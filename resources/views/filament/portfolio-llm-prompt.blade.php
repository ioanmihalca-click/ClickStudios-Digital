<div x-data="{ copied: false }" class="flex flex-col gap-3">
    <div>
        <x-filament::button icon="heroicon-o-clipboard-document" size="sm"
            x-on:click="navigator.clipboard.writeText($refs.prompt.textContent).then(() => { copied = true; setTimeout(() => copied = false, 2000) })">
            <span x-show="! copied">Copiază promptul</span>
            <span x-show="copied" x-cloak>Copiat</span>
        </x-filament::button>
    </div>

    <pre x-ref="prompt"
        class="max-h-[60vh] overflow-auto whitespace-pre-wrap rounded-lg bg-gray-50 p-4 font-mono text-xs leading-relaxed text-gray-800 ring-1 ring-gray-950/5 dark:bg-white/5 dark:text-gray-200 dark:ring-white/10">{{ $prompt }}</pre>
</div>
