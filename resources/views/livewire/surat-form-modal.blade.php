<div>
    {{-- Do your work, then step back. --}}
    {{-- tombol tambah data --}}
    <div class="flex flex-row justify-between items-start">
        <div class="flex items-baseline gap-2">
            <h1 class="text-2xl text-black dark:text-gray-800 font-semibold">Data</h1>
            <p class="text-gray-400 text-sm">{{ $kategori }}</p>
        </div>

        <button type="button" wire:click='openModal'
            class="text-white inline-flex items-center bg-teal-500 gap-2  hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            <i class="fa-solid fa-plus dark:text-white text-black"></i>Tambah Data
        </button>
    </div>



    {{-- flash message --}}
    @if (session('success'))
        <div id="alert-3" x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-2" role="alert"
            class="fixed z-50 flex items-center gap-3 px-4 py-3 rounded-lg shadow-md bg-green-50 text-green-800 dark:bg-gray-800 dark:text-green-400 top-4 left-1/2 transform -translate-x-1/2 w-auto max-w-md transition-all duration-300">

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

    {{-- modal --}}
    @if ($showModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto bg-black/40 backdrop-blur-sm">
            <div
                class="relative w-full max-w-2xl mx-4 my-8 bg-white rounded-xl shadow-lg dark:bg-gray-800 max-h-[90vh] overflow-hidden">
                {{-- Header --}}
                <div
                    class="flex items-center justify-between p-6 border-b dark:border-gray-700 bg-white dark:bg-gray-800 sticky top-0 z-10">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tambah Data Surat</h3>
                    <button wire:click="closeModal"
                        class="text-gray-400 hover:cursor-pointer hover:text-gray-600 dark:hover:text-gray-300 rounded-lg p-1">
                        ✕
                    </button>
                </div>

                {{-- Body --}}
                <div class="overflow-y-auto max-h-[calc(100vh-140px)]">
                    <form wire:submit.prevent="simpan" class="p-6 space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.
                                    Surat</label>
                                <input type="text" wire:model.blur="noSurat"
                                    class="w-full p-2 border-gray-300 dark:border-gray-500 rounded-lg focus:ring focus:ring-gray-500 dark:bg-gray-700 dark:text-white"
                                    placeholder="Masukkan nomor surat" required>
                                @error('noSurat')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                                    Surat</label>
                                <input type="text" wire:model="kodeSurat"
                                    class="w-full p-2 border-gray-300 dark:border-gray-500 rounded-lg focus:ring focus:ring-gray-500 dark:bg-gray-700 dark:text-white"
                                    placeholder="Masukkan kode surat" required>
                                @error('kodeSurat')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <label
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perihal</label>
                                <textarea wire:model="perihal" rows="3"
                                    class="w-full p-2 border-gray-300 dark:border-gray-500 rounded-lg focus:ring focus:ring-gray-500 dark:bg-gray-700 dark:text-white"
                                    placeholder="Masukkan perihal surat..." required></textarea>
                                @error('perihal')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                    Surat</label>
                                <input type="date" wire:model="tanggalSurat"
                                    class="w-full p-2 border-gray-300 dark:border-gray-500 rounded-lg focus:ring focus:ring-gray-500 dark:bg-gray-700 dark:text-white"
                                    required>
                                @error('tanggalSurat')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tertuju</label>
                                <input type="text" wire:model="tertuju"
                                    class="w-full p-2 border-gray-300 dark:border-gray-500 rounded-lg focus:ring focus:ring-gray-500 dark:bg-gray-700 dark:text-white"
                                    required>
                                @error('tertuju')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                    Surat</label>
                                <input type="text" wire:model="jenisSurat"
                                    class="w-full p-2 border-gray-300 dark:border-gray-500 rounded-lg focus:ring focus:ring-gray-500 dark:bg-gray-700 dark:text-white"
                                    placeholder="Masukkan jenis surat" required>
                                @error('jenisSurat')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-2">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Upload file</label>
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="file_input" type="file" wire:model='file'>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF (MAX.
                                    2MB).</p>
                                @error('file')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Footer --}}
                        <div class="flex justify-end space-x-2 pt-4 border-t dark:border-gray-700">
                            <button type="button" wire:click="closeModal"
                                class="hover:cursor-pointer px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 dark:bg-gray-600 dark:text-white dark:hover:bg-gray-500">
                                Batal
                            </button>
                            <button type="submit"
                                class="hover:cursor-pointer px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    @endif

    {{-- confirm delete dialogue --}}
    @if ($deleteId)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm">
            <div class="bg-white dark:bg-gray-700 rounded-xl shadow-lg p-6 w-96 lg:w-full max-w-md text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <p class="text-gray-500 dark:text-gray-400 mb-6">Apakah kamu yakin ingin menghapus surat ini? Tindakan
                    ini tidak bisa
                    dibatalkan.</p>

                <div class="flex justify-center gap-4">
                    <button wire:click="$set('deleteId', null)"
                        class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 hover:cursor-pointer">
                        Batal
                    </button>
                    <button wire:click="delete"
                        class="px-4 py-2 bg-red-600 text-white hover:cursor-pointer rounded-lg hover:bg-red-700">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
    @endif

    {{-- search bar --}}
    <div class="flex justify-end items-center mt-5">
        <div class="max-w-52 lg:max-w-xs w-full">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" wire:model.live.debounce.500ms='search'
                    class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari data..." />
            </div>
        </div>
    </div>

    {{-- tabel --}}
    <div class="relative overflow-x-auto shadow-md rounded-lg my-5 lg:my-3">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                <tr>
                    <th scope="col" class="px-6 py-3">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No. Surat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kode Surat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Surat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tertuju
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis Surat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Perihal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Dokumen
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>

                </tr>
            </thead>
            <tbody>
                @forelse ($surats as $surat)
                    <tr class="bg-white text-center border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $surats->firstItem() + $loop->index }}.
                        </th>
                        <td class="px-6 py-4">
                            {{ $surat->no_surat }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $surat->kode_surat }}
                        </td>
                        <td class="px-6 py-4">
                            {{ \Carbon\Carbon::parse($surat->tanggal_surat)->translatedFormat('d F Y') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $surat->tertuju }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $surat->jenis_surat }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $surat->perihal }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($surat->file)
                                <a href="{{ asset('storage/' . $surat->file) }}" target="_blank"
                                    class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                                    <i class="fa-solid fa-eye mr-1"></i> Lihat
                                </a>
                            @endif
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex justify-center items-center gap-2">
                                <button wire:click='edit({{ $surat->id }})' type="button"
                                    class="hover:cursor-pointer " title="edit"><i
                                        class="fa-solid fa-pen-to-square hover:bg-green-700 text-white text-xs text-center p-2 bg-green-500 rounded-lg"></i></button>
                                <button wire:click="confirmDelete({{ $surat->id }})" type="button"
                                    class="hover:cursor-pointer " title="hapus"><i
                                        class="fa-solid fa-trash text-white text-xs text-center p-2 bg-red-500 rounded-lg hover:bg-red-700"></i></button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center italic py-4 text-gray-500">
                            @if ($search)
                                Data tidak ditemukan untuk pencarian "{{ $search }}".
                            @else
                                Belum ada data surat {{ $kategori }}.
                            @endif
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- pagination --}}
    <div class="flex flex-col items-center my-5">
        <!-- Help text -->
        <span class="text-sm text-gray-700 dark:text-gray-500">
            Menampilkan
            <span class="font-semibold text-gray-900 dark:text-gray-800">
                {{ $surats->firstItem() }}
            </span>
            sampai
            <span class="font-semibold text-gray-900 dark:text-gray-800">
                {{ $surats->lastItem() }}
            </span>
            dari
            <span class="font-semibold text-gray-900 dark:text-gray-800">
                {{ $surats->total() }}
            </span>
            Data
        </span>

        <!-- Pagination Buttons -->
        <div class="inline-flex mt-3">
            <!-- Tombol Prev -->
            <button wire:click="previousPage" wire:loading.attr="disabled" @disabled($surats->onFirstPage())
                class="flex items-center justify-center px-4 py-2 text-sm font-medium rounded-l-lg transition-all duration-200 hover:cursor-pointer
                   {{ $surats->onFirstPage()
                       ? 'bg-gray-300 text-gray-500 cursor-not-allowed dark:bg-gray-700 dark:text-gray-500'
                       : 'bg-gray-800 text-white hover:bg-gray-900 dark:bg-gray-800 dark:hover:bg-gray-700' }}">
                <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 10" aria-hidden="true">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 5H1m0 0 4 4M1 5l4-4" />
                </svg>
                Prev
            </button>

            <!-- Tombol Next -->
            <button wire:click="nextPage" wire:loading.attr="disabled" @disabled(!$surats->hasMorePages())
                class="flex items-center justify-center px-4 py-2 text-sm font-medium rounded-r-lg transition-all duration-200 hover:cursor-pointer
                   {{ !$surats->hasMorePages()
                       ? 'bg-gray-300 text-gray-500 cursor-not-allowed dark:bg-gray-700 dark:text-gray-500'
                       : 'bg-gray-800 text-white hover:bg-gray-900 dark:bg-gray-800 dark:hover:bg-gray-700' }}">
                Next
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 10" aria-hidden="true">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </button>
        </div>
    </div>


</div>
