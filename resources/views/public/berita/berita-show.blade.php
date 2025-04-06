<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-5 md:mx-40 mt-30 mb-10">
        <x-sub-url>
            <x-slot:title>{{ $title }}</x-slot:title>
            <x-slot:url>{{ $url }}</x-slot:url>
            <x-slot:judul>{{ $berita['judul'] }}</x-slot:judul>
        </x-sub-url>


        <div class="my-5 border-b border-gray-300 pb-10">
            <img src="{{ asset('storage/' . $berita['image']) }}" alt="{{ $berita['image'] }}" class="w-full">
            <h2 class="text-blue-950 text-2xl font-bold mt-10">{{ $berita['judul'] }}</h2>
        </div>
        <div class="text-gray-700">

            <div class="prose max-w-none my-5 text-justify">
                {!! $berita['isi'] !!}
            </div>
        </div>

    </div>

</x-layout>
