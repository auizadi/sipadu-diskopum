<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @section('title', 'Dashboard | SIPADU')

    {{-- session message --}}
    @if (session('success'))
        <div id="alert-3" x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition role="alert"
            class="fixed z-50 flex items-center gap-3 px-4 py-3 rounded-lg shadow-md bg-green-50 text-green-800 dark:bg-gray-800 dark:text-green-400 top-4 left-4 right-4 sm:left-1/2 sm:-translate-x-1/2 sm:right-auto sm:w-auto sm:max-w-md lg:max-w-lg transition-all duration-300">

            <!-- Icon -->
            <svg class="w-5 h-5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"
                aria-hidden="true">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3
               1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0
               1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>

            <!-- Text -->
            <div class="text-sm text-center">
                <strong class="font-bold">{{ session('success') }}</strong>
            </div>

            <!-- Close button -->
            <button type="button" @click="show = false" aria-label="Close"
                class="ml-auto flex items-center justify-center w-8 h-8 rounded-lg
                   bg-green-50 text-green-500 hover:bg-green-200 focus:ring-2 focus:ring-green-400
                   dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700">
                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                    aria-hidden="true">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

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
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-3">
        {{-- card kelembagaan --}}
        <div class="rounded-md w-full bg-gray-50 p-4 shadow-md" id="card-1">
            <div class="flex justify-between gap-10 items-center">
                <div>
                    <p class="font-bold text-[8pt] mb-3">DOKUMEN KELEMBAGAAN</p>
                    <p class="text-2xl font-bold">{{ $dataCount['kelembagaan'] }}</p>
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

            <p class="font-thin text-xs">Total Dokumen Kelembagaan</p>
        </div>
        {{-- card pengembangan --}}
        <div class="rounded-md w-full bg-gray-50 p-4 shadow-md" id="card-1">
            <div class="flex justify-between gap-10 items-center">
                <div>
                    <p class="font-bold text-[8pt] mb-3">DOKUMEN PENGEMBANGAN</p>
                    <p class="text-2xl font-bold">{{ $dataCount['pengembangan'] }}</p>
                </div>
                <button type="button"
                    class="text-white bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700 hover:bg-gradient-to-br  font-medium rounded-lg text-sm px-2 py-2 text-center me-2 mb-2">
                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Zm4.996 2a1 1 0 0 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM11 8a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2h-6Zm-4.004 3a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM11 11a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2h-6Zm-4.004 3a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM11 14a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2h-6Z"
                            clip-rule="evenodd" />
                    </svg>


                </button>

            </div>
            <div class="-mx-4 my-2">
                <div class="h-0.5 w-full bg-black"></div>
            </div>

            <p class="font-thin text-xs">Total Dokumen Pengembangan</p>
        </div>
        {{-- card pemberdayaan --}}
        <div class="rounded-md w-full bg-gray-50 p-4 shadow-md" id="card-1">
            <div class="flex justify-between gap-10 items-center">
                <div>
                    <p class="font-bold text-[8pt] mb-3">DOKUMEN PEMBERDAYAAN</p>
                    <p class="text-2xl font-bold">{{ $dataCount['pemberdayaan'] }}</p>
                </div>
                <button type="button"
                    class="text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br  font-medium rounded-lg text-sm px-2 py-2 text-center me-2 mb-2">
                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Zm5-7a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 2a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H8Z"
                            clip-rule="evenodd" />
                    </svg>

                </button>

            </div>
            <div class="-mx-4 my-2">
                <div class="h-0.5 w-full bg-black"></div>
            </div>

            <p class="font-thin text-xs">Total Dokumen Pemberdayaan</p>
        </div>
        {{-- card pengawasan --}}
        <div class="rounded-md w-full bg-gray-50 p-4 shadow-md" id="card-1">
            <div class="flex justify-between gap-10 items-center">
                <div>
                    <p class="font-bold text-[8pt] mb-3">DOKUMEN PENGAWASAN</p>
                    <p class="text-2xl font-bold">{{ $dataCount['pengawasan'] }}</p>
                </div>
                <button type="button"
                    class="text-white bg-gradient-to-r from-yellow-500 via-yellow-600 to-yellow-700 hover:bg-gradient-to-br  font-medium rounded-lg text-sm px-2 py-2 text-center me-2 mb-2">
                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm.5 5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Zm0 5c.47 0 .917-.092 1.326-.26l1.967 1.967a1 1 0 0 0 1.414-1.414l-1.817-1.818A3.5 3.5 0 1 0 11.5 17Z"
                            clip-rule="evenodd" />
                    </svg>

                </button>

            </div>
            <div class="-mx-4 my-2">
                <div class="h-0.5 w-full bg-black"></div>
            </div>

            <p class="font-thin text-xs">Total Dokumen Pengawasan</p>
        </div>
        {{-- card sekretariat --}}
        <div class="rounded-md w-full bg-gray-50 p-4 shadow-md" id="card-1">
            <div class="flex justify-between gap-10 items-center">
                <div>
                    <p class="font-bold text-[8pt] mb-3">DOKUMEN SEKRETARIAT</p>
                    <p class="text-2xl font-bold">{{ $dataCount['sekretariat'] }}</p>
                </div>
                <button type="button"
                    class="text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br  font-medium rounded-lg text-sm px-2 py-2 text-center me-2 mb-2">
                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h11.5c.07 0 .14-.007.207-.021.095.014.193.021.293.021h2a2 2 0 0 0 2-2V7a1 1 0 0 0-1-1h-1a1 1 0 1 0 0 2v11h-2V5a2 2 0 0 0-2-2H5Zm7 4a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm-6 4a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM7 6a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H7Zm1 3V8h1v1H8Z"
                            clip-rule="evenodd" />
                    </svg>

                </button>

            </div>
            <div class="-mx-4 my-2">
                <div class="h-0.5 w-full bg-black"></div>
            </div>

            <p class="font-thin text-xs">Total Dokumen Sekretariat</p>
        </div>

        {{-- card kepegawaian --}}
        <div class="rounded-md w-full bg-gray-50 p-4 shadow-md" id="card-1">
            <div class="flex justify-between gap-10 items-center">
                <div>
                    <p class="font-bold text-[8pt] mb-3">DOKUMEN KEPEGAWAIAN</p>
                    <p class="text-2xl font-bold">{{ $dataCount['kepegawaian'] }}</p>
                </div>
                <button type="button"
                    class="text-white bg-gradient-to-r from-cyan-500 via-cyan-600 to-cyan-700 hover:bg-gradient-to-br  font-medium rounded-lg text-sm px-2 py-2 text-center me-2 mb-2">
                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-6 8a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1 3a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z"
                            clip-rule="evenodd" />
                    </svg>

                </button>

            </div>
            <div class="-mx-4 my-2">
                <div class="h-0.5 w-full bg-black"></div>
            </div>

            <p class="font-thin text-xs">Total Dokumen Kepegawaian</p>
        </div>

        {{-- card total --}}
        <div class="rounded-md w-full bg-gray-50 p-4 shadow-md" id="card-1">
            <div class="flex justify-between gap-10 items-center">
                <div>
                    <p class="font-bold text-[8pt] mb-3">TOTAL DOKUMEN</p>
                    <p class="text-2xl font-bold">{{ $dataCount['total'] }}</p>
                </div>
                <button type="button"
                    class="text-white bg-gradient-to-r from-lime-500 via-lime-600 to-lime-700 hover:bg-gradient-to-br  font-medium rounded-lg text-sm px-2 py-2 text-center me-2 mb-2">
                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm-1 9a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Zm2-5a1 1 0 0 1 1 1v6a1 1 0 1 1-2 0v-6a1 1 0 0 1 1-1Zm4 4a1 1 0 1 0-2 0v3a1 1 0 1 0 2 0v-3Z"
                            clip-rule="evenodd" />
                    </svg>

                </button>

            </div>
            <div class="-mx-4 my-5">
                <div class="h-0.5 w-full bg-black"></div>
            </div>

            <p class="font-thin text-xs">Total Dokumen Keseluruhan</p>
        </div>
    </div>

</div>
