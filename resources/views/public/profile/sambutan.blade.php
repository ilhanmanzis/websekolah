<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="md:mx-40 mx-5 mt-30 mb-10">
        <x-url>
            <x-slot:title>{{ $title }}</x-slot:title>
        </x-url>

        {{-- start sambutan --}}
        <div class="my-5 border-b border-gray-300 pb-10">
            <img src="{{ asset('storage/profile/sambutan/' . $sambutan['image']) }}" alt="{{ $sambutan['image'] }}"
                class="md:w-1/3 w-full mx-auto">
        </div>
        <div class="text-gray-700">
            {!! $sambutan['isi'] !!}
        </div>
        {{-- end sambutan --}}
    </div>

</x-layout>
