@props(['first' => false, 'route', 'title'])

<li {{ $attributes }}>
    <a href="{{ route($route) }}">
        <div class="flex items-center text-sm text-gray-50 pb-1 {{ Route::currentRouteName() == $route ? 'border-white' : 'border-transparent' }} border-b hover:border-white {{ $first ? '' : 'xl:ml-6 2xl:ml-11' }}">
            {{ $slot }}
            <p class="ml-1.5">{{ $title }}</p>
        </div>
    </a>
</li>
