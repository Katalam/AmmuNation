<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <livewire:styles />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="bg-gray-50 antialiased font-sans">
    <!-- Header -->
    <div class="pt-6 md:pt-8 xl:pt-12 bg-red-800">
        <div class="mx-auto container px-4 xl:px-0">
            @include('layouts.navigation')
            <div class="xl:flex items-center flex-wrap">
                <div class="xl:w-3/4 2xl:w-4/5">
                </div>
                <div class="xl:w-1/4 2xl:w-1/5 flex flex-col items-center xl:pl-8 py-16 md:py-12">
                    <div class="w-full flex items-center justify-center">
                        <div class="flex flex-col items-center">
                            <img src="https://cdn.tuk.dev/assets/templates/olympus/profile.png" alt="profile">
                            <p class="mt-2 text-xs sm:text-sm md:text-base font-semibold text-center text-white">{{ Auth::user()->username }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header -->
    <main>
        {{ $slot }}
    </main>
    <livewire:scripts />
</body>

</html>
