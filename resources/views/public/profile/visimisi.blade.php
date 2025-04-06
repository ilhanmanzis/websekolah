<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-5 md:mx-40 mt-30 mb-10">
        <x-url>
            <x-slot:title>{{ $title }}</x-slot:title>
        </x-url>


        <div class="my-5 border-b border-gray-300 pb-10">
            <img src="{{ asset('storage/' . $visiMisi['image']) }}" alt="" class="w-full">
        </div>
        <div class="text-gray-700">
            <span class="text-blue-950 font-bold text-2xl">Visi</span>
            <div class="prose max-w-none my-5">
                {!! $visiMisi['visi'] !!}
            </div>
            <span class="text-blue-950 font-bold text-2xl">Misi</span>
            <div class="prose max-w-none my-5">
                {!! $visiMisi['misi'] !!}
            </div>
        </div>

    </div>

</x-layout>
