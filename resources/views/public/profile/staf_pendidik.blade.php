<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-5 md:mx-30 mt-30 mb-10">
        <x-url>
            <x-slot:title>{{ $title }}</x-slot:title>
        </x-url>


        <div class="my-5 border-b border-gray-300 pb-10">
            <img src="{{ asset('storage/' . $profile['foto_pendidik']) }}" alt="{{ $profile['foto_pendidik'] }}"
                class="w-full">
        </div>
        <div class="text-gray-700">
            <div class="text-center mb-10">
                <h2 class="text-blue-950 text-4xl font-bold">TENAGA PENDIDIK</h2>
                <div class="flex justify-center mt-2 gap-2">
                    <div class="w-12 h-1 bg-yellow-400"></div>
                    <div class="w-12 h-1 bg-yellow-400"></div>
                </div>
            </div>
        </div>
        <div class="my-5 flex justify-around flex-wrap">
            @foreach ($pendidiks as $pendidik)
                <div class="my-3 w-50 h-76 bg-white rounded-xl shadow-md overflow-hidden">
                    <img src="{{ asset('storage/' . $pendidik['foto']) }}" alt="{{ $pendidik['foto'] }}"
                        class="w-full h-48 object-cover" />
                    <div class="p-4 text-center">
                        <h2 class="text-sm font-bold text-gray-900">{{ $pendidik['nama'] }}</h2>
                        <p class="text-yellow-500 text-sm font-semibold">
                            {{ $pendidik->mataPelajaran->nama_mata_pelajaran }}
                    </div>
                </div>
            @endforeach


        </div>

    </div>

    </div>

</x-layout>
