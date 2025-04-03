<x-layout>
    <x-slot:page>{{ $page }}</x-slot:page>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-5 md:mx-40 mt-30 mb-10">
        <x-url>
            <x-slot:title>{{ $title }}</x-slot:title>
        </x-url>


        <div class="my-5 border-b border-gray-300 pb-10">
            <img src="{{ asset('storage/layanan/ekstrakurikuler/' . $profile['ekstrakurikuler']) }}" alt=""
                class="w-full">
        </div>
        <div class="text-gray-700 bg-blue-950 pt-10">
            <div class="text-center mb-10">
                <h2 class="text-white text-4xl font-bold">EKSTRAKURIKULER</h2>
                <div class="flex justify-center mt-2 gap-2">
                    <div class="w-12 h-1 bg-yellow-400"></div>
                    <div class="w-12 h-1 bg-yellow-400"></div>
                </div>
            </div>
            <div class="flex flex-wrap justify-around bg-blue-950 py-5">
                @foreach ($ekstrakurikulers as $ekstrakurikuler)
                    <div
                        class="flex justify-start px-5 bg-white shadow-md rounded-md py-6 items-center md:w-70 w-full mx-2 my-2">
                        <img src="{{ asset('storage/layanan/ekstrakurikuler/' . $ekstrakurikuler['logo']) }}"
                            alt="{{ $ekstrakurikuler['logo'] }}" class="size-20">
                        <span class="text-gray-800 text-4xl">{{ $ekstrakurikuler['nama'] }}</span>
                    </div>
                @endforeach



            </div>
        </div>

    </div>

</x-layout>
