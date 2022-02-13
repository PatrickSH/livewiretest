<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Punch cards') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
        <x-table :headers="['hej','ned','dig']" :data-points="[['dav','dav2','dav3']]"></x-table>
    </x-slot>
</x-app-layout>
