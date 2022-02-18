@error($for)
<p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }} style="font-size: 9px">{{ $message }}</p>
@enderror
