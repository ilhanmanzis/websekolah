<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="md:mx-20 mx-5 mt-30 mb-10">
        <x-url>
            <x-slot:title>{{ $title }}</x-slot:title>
        </x-url>

        <div class="w-full my-5 flex justify-start flex-wrap">
            <div class="flex justify-start bg-white shadow-lg rounded-lg overflow-hidden flex-wrap my-10">
                <!-- Bagian Gambar -->
                <img src="{{ url('/') }}/images/banner/bg.jpg" alt="Pemenang Lomba"
                    class="w-full md:w-1/2 h-72 object-cover">

                <!-- Bagian Konten -->
                <div class="w-full px-5 py-4 md:w-1/2">
                    <!-- Judul -->
                    <a href="{{ url('/') }}/prestasi/1"
                        class="text-xl font-bold text-blue-950 hover:text-yellow-500">
                        JUARA UMUM LKTI NASIONAL MIPA UNY
                    </a>

                    <!-- Tanggal -->
                    <div class="flex items-center text-gray-500 text-sm my-2 border-b border-gray-400 pb-5 pt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                        </svg>

                        17 Feb, 2025
                    </div>

                    <!-- Skala -->
                    <p class="pt-5 text-gray-700 text-md font-semibold mb-2">
                        Skala Nasional
                    </p>
                    <div class="flex justify-start py-2 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                        </svg>
                        <span class="pl-2">:</span>
                        <span class="pl-2">Juara 1</span>
                    </div>

                    <!-- Tim -->
                    <div class="flex justify-start text-gray-600 text-sm text-justify">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="lg:size-10 md:size-12 size-18">
                            <path fill-rule="evenodd"
                                d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                clip-rule="evenodd" />
                            <path
                                d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                        </svg>

                        <span class="lg:pt-2 md:pt-3 pt-6 pl-2">:</span>
                        <span class="lg:pt-2 md:pt-3 pt-6 pl-2">

                            Al Farabi Obiansyah XII MIPA 2, Muhammad Fakhri Ghonim Setyanda XII MIPA 3,
                            Katon
                            Dian
                            Candra XI F, Naura Junata XI F
                        </span>

                    </div>
                </div>
            </div>
            <div class="flex justify-start bg-white shadow-lg rounded-lg overflow-hidden flex-wrap my-10">
                <!-- Bagian Gambar -->
                <img src="{{ url('/') }}/images/banner/bg.jpg" alt="Pemenang Lomba"
                    class="w-full md:w-1/2 h-72 object-cover">

                <!-- Bagian Konten -->
                <div class="w-full px-5 py-4 md:w-1/2">
                    <!-- Judul -->
                    <a href="{{ url('/') }}/prestasi/1"
                        class="text-xl font-bold text-blue-950 hover:text-yellow-500">
                        JUARA UMUM LKTI NASIONAL MIPA UNY
                    </a>

                    <!-- Tanggal -->
                    <div class="flex items-center text-gray-500 text-sm my-2 border-b border-gray-400 pb-5 pt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                        </svg>

                        17 Feb, 2025
                    </div>

                    <!-- Skala -->
                    <p class="pt-5 text-gray-700 text-md font-semibold mb-2">
                        Skala Nasional
                    </p>
                    <div class="flex justify-start py-2 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                        </svg>
                        <span class="pl-2">:</span>
                        <span class="pl-2">Juara 1</span>
                    </div>

                    <!-- Tim -->
                    <div class="flex justify-start text-gray-600 text-sm text-justify">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="lg:size-10 md:size-12 size-18">
                            <path fill-rule="evenodd"
                                d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                clip-rule="evenodd" />
                            <path
                                d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                        </svg>

                        <span class="lg:pt-2 md:pt-3 pt-6 pl-2">:</span>
                        <span class="lg:pt-2 md:pt-3 pt-6 pl-2">

                            Al Farabi Obiansyah XII MIPA 2, Muhammad Fakhri Ghonim Setyanda XII MIPA 3,
                            Katon
                            Dian
                            Candra XI F, Naura Junata XI F
                        </span>

                    </div>
                </div>
            </div>
        </div>

    </div>

</x-layout>
