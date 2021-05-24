@props(['active'])

@php
$classes = 'inline-flex items-center px-1 pt-1 text-sm font-semibold leading-5 text-white focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes, 'x-data' => '{ hover: false, force:' . ($active ? 'true' : 'false') . '}']) }} @mouseover="hover = true" @mouseover.away="hover = false">
    {{ $slot }}
    <div class="relative right-1/2 top-1/3 h-1 rounded-md w-8 transition duration-150 ease-in-out" :class="{ 'bg-white': hover || force }"></div>
</a>
