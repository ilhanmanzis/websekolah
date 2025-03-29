<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-5 md:mx-40 mt-30 mb-10">
        <x-url>
            <x-slot:title>{{ $title }}</x-slot:title>
        </x-url>


        <div class="my-5 border-t border-gray-300 pt-5">
            <img src="{{ url('/') }}/images/banner/bg.jpg" alt="" class="w-full">
        </div>


    </div>

</x-layout>
