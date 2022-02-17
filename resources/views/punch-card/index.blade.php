<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Punch cards') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <div class="flex w-full justify-end mb-3">
            <x-jet-button type="button" wire:click="$emit('showModal','counter')">
                Create punch card
            </x-jet-button>
        </div>
        <x-table :headers="['hej','ned','dig']" :data-points="[['dav','dav2','dav3'],['dav','dav2','dav3'],['dav','dav2','dav3']]">
            <x-slot name="actions">
                <x-icon icon="edit" class="mr-2"></x-icon>
                <x-icon icon="trash"></x-icon>
            </x-slot>
        </x-table>
        <livewire:modal></livewire:modal>
    </x-slot>
</x-app-layout>
