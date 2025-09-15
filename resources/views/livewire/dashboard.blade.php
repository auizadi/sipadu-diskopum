<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex flex-col md:flex-row justify-start md:justify-between items-start">
        <div class="flex order-2 md:order-1 items-baseline gap-2">
            <h1 class="text-2xl text-black dark:text-gray-800 font-semibold">Dashboard</h1>
            <p class="text-gray-400 text-sm">Overview & statistic</p>
        </div>
        <button type="button"
            class="text-white inline-flex gap-1 order-1 md:order-2 items-center bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br  rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                    clip-rule="evenodd" />
            </svg>
            {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
        </button>
    </div>

    {{-- alert --}}
    <div id="alert-border-3"
        class="flex items-center justify-between my-5 p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-100"
        role="alert">

        <!-- Ikon Info -->
        <div class="flex items-start gap-3">
            <svg class="shrink-0 w-5 h-5 mt-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>

            <!-- Teks -->
            <div class="text-sm font-medium">
                <p class="text-xs">
                    <span class="font-bold text-sm text-green-600">Selamat Datang di SIPADU</span>.
                    Sistem Pengelolaan Arsip Terpadu - Dinas Koperasi dan Usaha Mikro Kabupaten Lamongan

                </p>
            </div>
        </div>

        <!-- Tombol Close -->
        <button type="button"
            class="text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
            data-dismiss-target="#alert-border-3" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>

    {{-- card dokumen --}}
    <div class="flex flex-col md:flex-row gap-5 justify-between items-center">
        {{-- card 1 --}}
        <div class="rounded-md w-full bg-gray-50 p-4 shadow-md" id="card-1">
            <div class="flex justify-between gap-10 items-center">
                <div>
                    <p class="font-bold text-[8pt] mb-3">JENIS DOKUMEN</p>
                    <p class="text-2xl font-bold">9</p>
                </div>
                <button type="button"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br  font-medium rounded-lg text-sm px-2 py-2 text-center me-2 mb-2">
                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 .087.586l2.977-7.937A1 1 0 0 1 6 10h12V9a2 2 0 0 0-2-2h-4.532l-1.9-2.28A2 2 0 0 0 8.032 4H4Zm2.693 8H6.5l-3 8H18l3-8H6.693Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

            </div>
            <div class="-mx-4 my-2">
                <div class="h-0.5 w-full bg-black"></div>
            </div>

            <p class="font-thin text-xs">Total Jenis Dokumen</p>
        </div>
        {{-- card 1 --}}
        <div class="rounded-md w-full bg-gray-50 p-4 shadow-md" id="card-1">
            <div class="flex justify-between gap-10 items-center">
                <div>
                    <p class="font-bold text-[8pt] mb-3">JENIS DOKUMEN</p>
                    <p class="text-2xl font-bold">9</p>
                </div>
                <button type="button"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br  font-medium rounded-lg text-sm px-2 py-2 text-center me-2 mb-2">
                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 .087.586l2.977-7.937A1 1 0 0 1 6 10h12V9a2 2 0 0 0-2-2h-4.532l-1.9-2.28A2 2 0 0 0 8.032 4H4Zm2.693 8H6.5l-3 8H18l3-8H6.693Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

            </div>
            <div class="-mx-4 my-2">
                <div class="h-0.5 w-full bg-black"></div>
            </div>

            <p class="font-thin text-xs">Total Jenis Dokumen</p>
        </div>
        {{-- card 1 --}}
        <div class="rounded-md w-full bg-gray-50 p-4 shadow-md" id="card-1">
            <div class="flex justify-between gap-10 items-center">
                <div>
                    <p class="font-bold text-[8pt] mb-3">JENIS DOKUMEN</p>
                    <p class="text-2xl font-bold">9</p>
                </div>
                <button type="button"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br  font-medium rounded-lg text-sm px-2 py-2 text-center me-2 mb-2">
                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 .087.586l2.977-7.937A1 1 0 0 1 6 10h12V9a2 2 0 0 0-2-2h-4.532l-1.9-2.28A2 2 0 0 0 8.032 4H4Zm2.693 8H6.5l-3 8H18l3-8H6.693Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

            </div>
            <div class="-mx-4 my-2">
                <div class="h-0.5 w-full bg-black"></div>
            </div>

            <p class="font-thin text-xs">Total Jenis Dokumen</p>
        </div>
        {{-- card 1 --}}
        <div class="rounded-md w-full bg-gray-50 p-4 shadow-md" id="card-1">
            <div class="flex justify-between gap-10 items-center">
                <div>
                    <p class="font-bold text-[8pt] mb-3">JENIS DOKUMEN</p>
                    <p class="text-2xl font-bold">9</p>
                </div>
                <button type="button"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br  font-medium rounded-lg text-sm px-2 py-2 text-center me-2 mb-2">
                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 .087.586l2.977-7.937A1 1 0 0 1 6 10h12V9a2 2 0 0 0-2-2h-4.532l-1.9-2.28A2 2 0 0 0 8.032 4H4Zm2.693 8H6.5l-3 8H18l3-8H6.693Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

            </div>
            <div class="-mx-4 my-2">
                <div class="h-0.5 w-full bg-black"></div>
            </div>

            <p class="font-thin text-xs">Total Jenis Dokumen</p>
        </div>
    </div>

</div>
