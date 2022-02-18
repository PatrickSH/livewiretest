<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Punch cards') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <x-right-aligned-button class="mb-3">
            <x-jet-button type="button" onclick="Livewire.emit('showModal', 'pages.punch-card.store-punch-card')">
                Create punch card
            </x-jet-button>
        </x-right-aligned-button>
        <livewire:table tableClass="hej">
            <x-slot name="actions">
                <x-icon icon="edit" class="mr-2"></x-icon>
                <x-icon icon="trash"></x-icon>
            </x-slot>
        </livewire:table>
    </x-slot>
</x-app-layout>
