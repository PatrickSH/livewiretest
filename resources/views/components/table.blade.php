<div>
    <div class="grid grid-cols-{{count($headers) + (isset($actions) ? 1 : 0)}} gap-4 bg-slate-200 shadow rounded p-2 mb-4">
        @foreach($headers as $header)
            <div class="col-span-1 font-bold text-center">{{$header}}</div>
        @endforeach
        @if (isset($actions))
                <div class="col-span-1 font-bold text-center"></div>
        @endif
    </div>
    @foreach($dataPoints as $dataPoint)
        <div class="grid grid-cols-{{count($headers) + (isset($actions) ? 1 : 0)}} gap-4 even:bg-slate-50 odd:bg-slate-200 shadow rounded p-2 mb-2 duration-150 transform-gpu hover:scale-105">
                @foreach($dataPoint as $value)
                    <div class="col-span-1 text-center">{{$value}}</div>
                @endforeach
                @if (isset($actions))
                        <div class="col-span-1 text-center flex items-center">
                            {{$actions}}
                        </div>
                @endif
        </div>
    @endforeach
</div>
