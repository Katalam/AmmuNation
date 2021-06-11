@props(['bg' => '', 'text' => ''])

<div class="mt-4 bg-white shadow rounded py-2 pl-2 pr-4">
    <div class="flex items-center">
        <div class="py-3 px-3 {{ $bg }} rounded-sm">
            {{ $slot }}
        </div>
        <p class="text-sm font-medium pl-5">{{ $text }}</p>
    </div>
</div>
