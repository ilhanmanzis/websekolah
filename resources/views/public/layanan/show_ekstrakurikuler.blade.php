<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-5 md:mx-40 mt-30 mb-10">
        <x-url>
            <x-slot:title>{{ $title }}</x-slot:title>
        </x-url>


        <div class="my-5 border-b border-gray-300 pb-10">
            <img src="{{ asset('storage/' . $ekstrakurikuler['banner']) }}" alt="{{ $ekstrakurikuler['banner'] }}"
                class="w-full">
        </div>
        <div class="text-gray-700">

            <div class="prose max-w-none text-justify my-5">
                {!! $ekstrakurikuler['isi'] !!}
            </div>
        </div>

    </div>

</x-layout>
