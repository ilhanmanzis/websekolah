<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-5 md:mx-40 mt-30 mb-10">
        <x-url>
            <x-slot:title>{{ $title }}</x-slot:title>
        </x-url>


        <div class="my-5 border-b border-gray-300 pb-10">
            <img src="{{ asset('storage/layanan/laboratorium/' . $laboratorium['image']) }}"
                alt="{{ $laboratorium['image'] }}" class="w-full">
        </div>
        <div class="text-gray-700">
            <div class="text-center mb-10">
                <h2 class="text-blue-950 text-4xl font-bold">LABORATORIUM</h2>
                <div class="flex justify-center mt-2 gap-2">
                    <div class="w-12 h-1 bg-yellow-400"></div>
                    <div class="w-12 h-1 bg-yellow-400"></div>
                </div>
            </div>
            <p class="my-5">
                {!! $laboratorium['isi'] !!}
            </p>
        </div>

    </div>

</x-layout>
