<div>
    @if (!is_null($comp))
        <div class="fixed w-full h-full z-40 top-0 left-0 right-0 bottom-0 flex items-center justify-center" style="background-color: rgba(0,0,0,0.5);" wire:click.self="$set('comp',null)">
            <div class="rounded p-4 bg-white shadow z-50">
                @livewire($comp)
            </div>
        </div>
    @endif
</div>
