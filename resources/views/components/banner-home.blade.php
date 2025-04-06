<div class="hero min-h-screen overflow-hidden relative w-full h-full bg-cover bg-center"
    style="background-image: url({{ asset('storage/' . $profile['image_banner']) }});">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="hero-content text-white text-center absolute inset-0 flex items-center justify-center"
        style="z-index: 2;">
        <div class="lg:mx-10 mx-5" id="main-search">
            <h1 class="mb-10 lg:text-5xl text-2xl font-bold">{{ $profile['motto'] }}</h1>

            <form class="lg:w-3xl md:w-md sm:w-sm mx-auto" action="/search">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" name="search" autocomplete="off"
                        class="rounded-full block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:ring-yellow-400 focus:border-yellow-500      "
                        placeholder="Apa yang ingin anda cari?" required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-full text-sm px-4 py-2   ">Cari</button>
                </div>
            </form>

        </div>
    </div>
</div>
