@props(['title' => '', 'first' => false])

<div class="{{ $first ? '' : 'xl:mt-7 md:mt-0 sm:mt-7 mt-7 lg:pl-0 md:pl-4 sm:pl-0 pl-0' }} md:w-full sm:w-1/2 w-full">
    <p class="text-base font-semibold text-gray-800">{{ $title }}</p>
    <div class="mt-4">
        {{ $slot }}
    </div>
</div>
