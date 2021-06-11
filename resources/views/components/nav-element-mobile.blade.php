@props(['route', 'title'])

<li {{ $attributes }}>
    <a href="{{ route($route) }}">
        <div class="flex items-center text-sm text-gray-900 p-4">
            {{ $slot }}
            <p class="ml-1.5">{{ $title }}</p>
        </div>
    </a>
</li>
