@props(['title' => '', 'side'])

<div class="px-4 xl:px-0">
    <div class="mx-auto container">
        <div class="xl:flex">
            <div class="xl:w-3/4 2xl:w-4/5 -mt-8 xl:-mt-44">
                <div class="pl-4 md:pl-10 py-4 md:py-7 bg-gray-100 rounded-tl-lg rounded-tr-lg shadow">
                    <p class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">{{ $title }}</p>
                </div>
                <div class="bg-white shadow-lg pb-8 px-4 md:px-8 xl:px-10">
                    <div class="py-4 sm:py-6 md:py-8">
                        {{ $slot }}
                    </div>
                </div>
            </div>
            {{ $side }}
        </div>
    </div>
</div>
