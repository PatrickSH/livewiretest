<div>
    <div>
        <div class="grid grid-cols-{{count($class->getTableHeaders()) + (($class->getTableCanDelete() || $class->getTableCanEdit()) ? 1 : 0)}} gap-4 bg-slate-200 shadow rounded p-2 mb-4">
            @foreach($class->getTableHeaders() as $header)
                <div class="col-span-1 font-bold text-center">{{$header}}</div>
            @endforeach
            @if ($class->getTableCanDelete() || $class->getTableCanEdit())
                <div class="col-span-1 font-bold text-center"></div>
            @endif
        </div>
        @foreach($datas->items() as $dataPoint)
            <div class="grid grid-cols-{{count($class->getTableHeaders()) + (($class->getTableCanDelete() || $class->getTableCanEdit()) ? 1 : 0)}} gap-4 even:bg-slate-50 odd:bg-slate-200 shadow rounded p-2 mb-2 duration-150 transform-gpu hover:scale-105">
                @foreach($dataPoint->getTableDatas() as $value)
                    <div class="col-span-1 text-center">{{$value}}</div>
                @endforeach
                @if ($dataPoint->getTableCanDelete() || $dataPoint->getTableCanEdit())
                    <div class="col-span-1 text-center flex items-center">
                        @if ($dataPoint->getTableCanEdit())
                            <x-icon icon="edit" class="mr-2 cursor-pointer"></x-icon>
                        @endif
                        @if ($dataPoint->getTableCanDelete())
                            <x-icon icon="trash" class="cursor-pointer"></x-icon>
                        @endif
                    </div>
                @endif
            </div>
        @endforeach
    </div>
    {{ $datas->links() }}
    <livewire:modal></livewire:modal>
</div>
