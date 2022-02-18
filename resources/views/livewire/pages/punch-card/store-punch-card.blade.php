<div class="w-[50vw]">
    <form wire:submit.prevent="store">
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-2">
                <x-error-handler for="price" class="mt-2" />
                <x-jet-input type="text" placeholder="Title" class="w-full" wire:model="name"/>
            </div>

            <div class="col-span-1">
                <label class="font-bold">Punch card duration</label>
                <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-1">
                        <x-jet-input-error for="totalDuration.hours" class="mt-2" />
                        <x-jet-input type="number" placeholder="Hours" class="w-full" wire:model="duration.hours"/>
                    </div>
                    <div class="col-span-1">
                        <x-jet-input type="number" placeholder="Minutes" class="w-full" wire:model="duration.minutes"/>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <label class="font-bold">Each punch duration</label>
                <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-1">
                        <x-jet-input type="number" placeholder="Hours" class="w-full" wire:model="punchDuration.hours"/>
                    </div>
                    <div class="col-span-1">
                        <x-jet-input type="number" placeholder="Minutes" class="w-full" wire:model="punchDuration.minutes"/>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <x-error-handler for="price" class="mt-2" />
                <x-jet-input type="number" placeholder="Price without VAT" class="w-full" wire:model="price"/>
            </div>
            <div class="col-span-1">
                <x-error-handler for="vatPercentage" class="mt-2" />
                <x-jet-input type="number" placeholder="VAT percentage" class="w-full" wire:model="vatPercentage"/>
            </div>
        </div>
        <x-right-aligned-button class="mt-3">
            <x-jet-button
                wire:loadign.attr="disabled"
                type="submit" onclick="Livewire.emit('showModal', 'pages.punch-card.store-punch-card')">
                Create
            </x-jet-button>
        </x-right-aligned-button>
    </form>
</div>
