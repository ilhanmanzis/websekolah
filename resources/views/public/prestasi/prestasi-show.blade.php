<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-5 md:mx-40 mt-30 mb-10">
        <x-sub-url>
            <x-slot:title>{{ $title }}</x-slot:title>
            <x-slot:url>{{ $url }}</x-slot:url>
            <x-slot:judul>{{ $prestasi['judul'] }}</x-slot:judul>
        </x-sub-url>


        <div class="my-5 border-b border-gray-300 pb-5">
            <img src="{{ asset('storage/prestasi/' . $prestasi['image']) }}" alt="{{ $prestasi['image'] }}" class="w-full">
            <h2 class="text-blue-950 text-2xl font-bold mt-10">{{ $prestasi['judul'] }}</h2>
            <div class="flex items-center text-sm mt-2 text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                </svg>

                {{ $prestasi['tanggal'] }}
            </div>
            <!-- Skala -->
            <p class="pt-5 text-gray-700 text-md font-semibold mb-2">
                Skala {{ $prestasi['skala'] }}
            </p>
            <div class="flex justify-start py-2 text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                </svg>
                <span class="pl-2">:</span>
                <span class="pl-2">{{ $prestasi['juara'] }}</span>
            </div>

            <!-- Tim -->
            <div class="flex justify-start text-gray-600 text-sm text-justify">
                <svg fill="currentColor" version="1.1" id="Capa_1" class="size-6" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 488.2 488.2" xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M480.7,327.7c-25.5-21-53-34.9-58.6-37.6c-0.6-0.3-1-0.9-1-1.7v-39.7c5-3.3,8.3-9,8.3-15.5V192
                                            c0-20.5-16.6-37.1-37.1-37.1h-4.4h-4.4c-20.5,0-37.1,16.6-37.1,37.1v41.2c0,6.5,3.3,12.1,8.3,15.5v39.7c0,0.7-0.4,1.3-1,1.7
                                            c-2.9,1.4-11.8,5.9-23.3,12.9c-21.9-15-41.1-24.7-46-27.1c-0.7-0.4-1.2-1.1-1.2-1.9v-46.8c5.9-3.9,9.7-10.6,9.7-18.2v-48.4
                                            c0-24.1-19.5-43.6-43.6-43.6h-5.4h-5.2c-24.1,0-43.6,19.5-43.6,43.6V209c0,7.6,3.9,14.3,9.7,18.2v46.7c0,0.8-0.5,1.6-1.2,1.9
                                            c-4.9,2.4-24.1,12.1-46,27.1c-11.5-6.9-20.4-11.4-23.3-12.9c-0.6-0.3-1-0.9-1-1.7v-39.7c5-3.3,8.3-9,8.3-15.5v-41.2
                                            c0-20.5-16.6-37.1-37.1-37.1h-4.4h-4.4c-20.5,0-37.1,16.6-37.1,37.1v41.2c0,6.5,3.3,12.1,8.3,15.5v39.7c0,0.7-0.4,1.3-1,1.7
                                            c-5.6,2.7-33.1,16.6-58.6,37.6C2.7,331.4,0,337.1,0,343v28.2h100.2h26.2h74h28.3l10.1-46.3c-20.4-28.5,1.5-29.8,5.3-29.9l0,0l0,0
                                            c3.8,0,25.8,1.4,5.3,29.9l10.1,46.3h28.3h74H388h100.2V343C488,337.2,485.3,331.5,480.7,327.7z" />
                        </g>
                    </g>
                </svg>

                <span class=" pl-2">:</span>
                <span class=" pl-2">{{ $prestasi['anggota'] }}
                </span>

            </div>
        </div>
        <div class="text-gray-700">

            <div class="my-5">
                {!! $prestasi['isi'] !!}
            </div>
        </div>

    </div>

</x-layout>
