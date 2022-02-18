<div>
    <x-table :headers="['hej','ned','dig']" :data-points="[['dav','dav2','dav3'],['dav','dav2','dav3'],['dav','dav2','dav3']]">
        <x-slot name="actions">
            <x-icon icon="edit" class="mr-2"></x-icon>
            <x-icon icon="trash"></x-icon>
        </x-slot>
    </x-table>
    <livewire:modal></livewire:modal>
</div>
