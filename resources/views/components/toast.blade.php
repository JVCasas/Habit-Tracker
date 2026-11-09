@php
$type = session()->has('success') ? 'success' : (session()->has('error') ? 'error' : 'warning');
$style = $type == 'success' ? 'bg-green-100 border-green-400 text-green-700' : ($type == 'error' ? 'bg-red-100 border-red-400 text-red-700' : 'bg-yellow-100 border-yellow-400 text-yellow-700');
$message = session($type);
@endphp

@if (session()->has('success') || session()->has('error') || session()->has('warning'))
<div id="toast" class="absolute top-25 right-20 flex p-3 mb-4 gap-2 border-2 {{ $style }}">
    <x-dynamic-component :component="'icons.'.$type"/>
    <p class="">
        {{ $message }}
    </p>
</div>
@endif
