<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIPADU')</title>
    {{-- icon --}}
    <link rel="icon" href="{{ asset('icon-megilan.png') }}" sizes="32x32" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/998802c292.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-200 pb-20">
    {{-- navbar --}}
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="{{ route('dashboard') }}" class="flex ms-2 md:me-24">
                        <img src="{{ asset('logo-lmg.png') }}" class="h-10 me-3" alt="lamongan" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">SIPADU</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div class="sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <h1 class="dark:text-white text-black font-semibold mb-3">Menu</h1>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('dashboard') }}" wire:navigate
                        class="{{ request()->routeIs('dashboard') ? 'bg-gray-700 p-2 flex text-white flex-row gap-2 items-center rounded-md' : 'hover:dark:bg-gray-700 p-2 flex hover:text-white flex-row gap-2 items-center rounded-md text-white' }}">
                        <i class="fa-solid fa-house dark:text-white/60 text-black text-xl"></i>

                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li x-data="{ open: $persist(false) }">
                    <button type="button" @click="open = !open"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-300 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                        <i class="fa-solid fa-box-archive dark:text-white/60 text-black text-xl"></i>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Manajemen Arsip</span>
                        <i class="fa-solid fa-caret-down dark:text-white/60 text-black transition-transform duration-300"
                            :class="{ 'rotate-180': open }"></i>
                    </button>
                    <ul x-show="open" x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-2" class="py-2 space-y-2">
                        <li>
                            <a href="{{ route('kelembagaan') }}" wire:navigate
                                class="flex items-center w-full p-2 {{ request()->routeIs('kelembagaan') ? 'bg-gray-200 dark:bg-gray-600' : '' }} text-gray-900 transition duration-300 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                <i class="fa-solid fa-people-roof dark:text-white/60 text-black mr-2 text-sm"></i>
                                Kelembagaan
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pengembangan') }}" wire:navigate
                                class="flex items-center w-full p-2 {{ request()->routeIs('pengembangan') ? 'bg-gray-200 dark:bg-gray-600' : '' }} text-gray-900 transition duration-300 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                <i class="fa-solid fa-envelopes-bulk dark:text-white/60 text-black mr-2 text-sm"></i>
                                Pengembangan
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('pemberdayaan') }}" wire:navigate
                                class="flex items-center w-full p-2 {{ request()->routeIs('pemberdayaan') ? 'bg-gray-200 dark:bg-gray-600' : '' }} text-gray-900 transition duration-300 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                <i class="fa-solid fa-inbox dark:text-white/60 text-black mr-2 text-sm"></i>
                                Pemberdayaan
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pengawasan') }}" wire:navigate
                                class="flex items-center w-full p-2 {{ request()->routeIs('pengawasan') ? 'bg-gray-200 dark:bg-gray-600' : '' }} text-gray-900 transition duration-300 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                <i class="fa-solid fa-users-viewfinder dark:text-white/60 text-black mr-2 text-sm"></i>
                                Pengawasan
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sekretariat') }}" wire:navigate
                                class="flex items-center w-full p-2 {{ request()->routeIs('sekretariat') ? 'bg-gray-200 dark:bg-gray-600' : '' }} text-gray-900 transition duration-300 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                <i class="fa-solid fa-users-rays dark:text-white/60 text-black mr-2 text-sm"></i>
                                Sekretariat
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kepegawaian') }}" wire:navigate
                                class="flex items-center w-full p-2 {{ request()->routeIs('kepegawaian') ? 'bg-gray-200 dark:bg-gray-600' : '' }} text-gray-900 transition duration-300 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                <i class="fa-solid fa-users-line dark:text-white/60 text-black mr-2 text-sm"></i>
                                Kepegawaian
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <button type="button" data-modal-target="logout-modal" data-modal-toggle="logout-modal"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group w-full text-left">
                        <i class="fa-solid fa-right-from-bracket dark:text-white/60 text-black text-xl"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
                    </button>
                </li>
            </ul>
        </div>
    </aside>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            {{ $slot }}
        </div>
        <x-footer />
    </div>
    <!-- Modal Konfirmasi Logout -->
    <div id="logout-modal" tabindex="-1" x-data x-init="initFlowbite()"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[9999] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Tombol Close -->
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="logout-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Tutup</span>
                </button>

                <div class="p-4 md:p-5 text-center">
                    <!-- Icon Warning -->
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                    <!-- Pesan Konfirmasi -->
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah Anda yakin
                        ingin keluar?</h3>

                    <!-- Form Logout -->
                    <div class="flex flex-row justify-center items-center gap-5">
                        <form method="POST" action="{{ route('logout') }}" id="logout-form">
                            @csrf
                            <button type="submit"
                                class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Ya, Keluar
                            </button>
                        </form>

                        <button data-modal-hide="logout-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:z-[9999] focus:ring-4 focus:ring-gray-100">
                            Batal
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleModal() {
            document.getElementById('crud-modal').classList.toggle('hidden');
        }
    </script>

    {{-- CDN flowbite --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    {{-- CDN fontawesome --}}
    <script src="https://kit.fontawesome.com/998802c292.js" crossorigin="anonymous"></script>

    {{-- plugin persist alpinejs --}}
    <script src="//unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js" defer></script>



</body>

</html>
