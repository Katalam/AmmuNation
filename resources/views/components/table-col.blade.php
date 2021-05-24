@props(['value'])

<td {{ $attributes->merge(['class' => 'px-6 py-4 whitespace-nowrap font-medium text-gray-900 text-sm']) }}>
    {{ $value ?? $slot }}
</td>
