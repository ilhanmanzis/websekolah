<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="md:mx-20 mx-5 mt-30 mb-10">
        <x-url>
            <x-slot:title>{{ $title }}</x-slot:title>
        </x-url>

        <div class="w-full my-5 flex justify-start flex-wrap">
            {{-- start sidebar --}}
            <div class="max-w-sm md:pr-8 pr-3">
                <div class="mb-5  ">
                    <h2 class="text-blue-950 text-lg font-bold">Search</h2>
                    <div class="flex justify-start mt-2 gap-2">
                        <div class="w-6 h-1 bg-yellow-400"></div>
                        <div class="w-6 h-1 bg-yellow-400"></div>
                    </div>
                </div>

                <form class="max-w-full w-sm">

                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="" required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-950 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 s">Search</button>
                    </div>
                </form>

            </div>
            {{-- end sidebar --}}

            {{-- start berita --}}
            <div class="max-w-full md:w-2/3 w-full md:p-5 p-0 md:mt-0 mt-10">
                <div
                    class="max-w-full w-full sm:mx-0  mb-5 md:mx-5 bg-white border border-gray-200 shadow-sm   relative overflow-hidden">
                    <div>
                        <img class="h-80 w-full" src="{{ url('/') }}/images/banner.jpg" alt="" />
                        <!-- Tanggal di atas gambar -->
                        <div
                            class="absolute top-58 md:top-58 left-3 bg-blue-950 bg-opacity-80 text-center px-3 py-2 rounded-md">
                            <span class="block text-3xl font-bold text-yellow-400">21</span>
                            <span class="block text-sm text-white">Feb, 2025</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <a href="{{ url('/') }}/berita/1">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-blue-950  hover:text-yellow-500">
                                GAUNGKAN 7
                                KEBIASAAN ANAK INDONESIA HEBAT, SMAN 1 YOGYAKARTA…</h5>
                        </a>
                        <p class="my-6 font-normal text-sm text-gray-700 ">
                            Jumat 21 Februari 2025 Siswa kelas X dan XI mengikuti kegiatan olahraga senam pagi di
                            Lapangan
                            Voli…
                        </p>
                        <a href="{{ url('/') }}/berita/1"
                            class="my-3 font-bold text-blue-950 flex items-center gap-1 hover:underline">Read More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>

                    </div>
                </div>
                <div
                    class="max-w-full w-full sm:mx-0  mb-5 md:mx-5 bg-white border border-gray-200 shadow-sm   relative overflow-hidden">
                    <div>
                        <img class="h-80 w-full" src="{{ url('/') }}/images/banner.jpg" alt="" />
                        <!-- Tanggal di atas gambar -->
                        <div
                            class="absolute top-58 md:top-58 left-3 bg-blue-950 bg-opacity-80 text-center px-3 py-2 rounded-md">
                            <span class="block text-3xl font-bold text-yellow-400">21</span>
                            <span class="block text-sm text-white">Feb, 2025</span>
                        </div>
                    </div>
                    <div class="p-5">
                        <a href="{{ url('/') }}/berita/1">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-blue-950  hover:text-yellow-500">
                                GAUNGKAN 7
                                KEBIASAAN ANAK INDONESIA HEBAT, SMAN 1 YOGYAKARTA…</h5>
                        </a>
                        <p class="my-6 font-normal text-sm text-gray-700 ">
                            Jumat 21 Februari 2025 Siswa kelas X dan XI mengikuti kegiatan olahraga senam pagi di
                            Lapangan
                            Voli…
                        </p>
                        <a href="{{ url('/') }}/berita/1"
                            class="my-3 font-bold text-blue-950 flex items-center gap-1 hover:underline">Read More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>



            {{-- end berita --}}
        </div>

    </div>

</x-layout>
