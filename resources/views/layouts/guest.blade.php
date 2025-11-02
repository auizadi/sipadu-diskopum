<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- icon --}}
    <link rel="icon" href="{{ asset('icon-megilan.png') }}" sizes="32x32" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div class="flex flex-row md:flex-col justify-center items-start md:items-center gap-5 mb-5 mx-5">
            <a href="/">
                <img src="{{ asset('icon-megilan.png') }}" class="w-32 h-24 md:w-20 md:24 fill-current text-gray-500"
                    alt="lamongan">
            </a>
            <div class="text-center dark:text-gray-100">
                <h1 class=" font-bold text-3xl">SIPADU DISKOPUM</h1>
                <p class="text-sm">(Sistem Pengelolaan Arsip Terpadu Dinas Koperasi dan Usaha Mikro Kabupaten Lamongan)
                </p>
            </div>
        </div>

        <div
            class=" w-full sm:max-w-md mt-5 px-6 py-4 mx-5 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
