<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-5 md:mx-40 mt-30 mb-10">
        <x-url>
            <x-slot:title>{{ $title }}</x-slot:title>
        </x-url>


        <div class="my-5 border-b border-gray-300 pb-10">
            <img src="{{ asset('storage/profile/visimisi/' . $visiMisi['image']) }}" alt="" class="w-full">
        </div>
        <div class="text-gray-700">
            <span class="text-blue-950 font-bold text-2xl">Visi</span>
            <p class="my-5">
                {!! $visiMisi['visi'] !!}
            </p>
            <span class="text-blue-950 font-bold text-2xl">Misi</span>
            <p class="my-5">
                {!! $visiMisi['misi'] !!}
            </p>
        </div>

    </div>

</x-layout>
