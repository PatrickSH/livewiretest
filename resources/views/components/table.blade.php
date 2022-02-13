<div>
    <div class="grid grid-cols-{{count($headers)}} gap-4">
        @foreach($headers as $header)
            <div class="col-span-1">{{$header}}</div>
        @endforeach
    </div>
    <div class="grid grid-cols-{{count($headers)}} gap-4">
        @foreach($dataPoints as $dataPoint)
            @foreach($dataPoint as $value)
                <div class="col-span-1 odd:bg-slate-50 even:bg-slate-200">{{$value}}</div>
            @endforeach
        @endforeach
    </div>
</div>