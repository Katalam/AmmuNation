@props(['value', 'active'])

@php
$classes = 'px-2 inline-flex text-xs leading-5 font-semibold rounded-full ';
$classes .= ($active ?? false)
            ? 'bg-green-100 text-green-800'
            : 'bg-red-100 text-red-800';
@endphp


<td {{ $attributes->merge(['class' => 'px-6 py-4 whitespace-nowrap font-medium text-gray-900 text-sm']) }}>
    <span {{ $attributes->merge(['class' => $classes]) }}>
        {{ $value ?? $slot }}
    </span>
</td>
