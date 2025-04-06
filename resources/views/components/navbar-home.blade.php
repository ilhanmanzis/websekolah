<nav id="navbar-background"
    class="{{ $page == 'Home' ? 'md:bg-transparent lg:bg-transparent bg-white' : 'bg-white' }}  lg:bg-opacity-50 fixed top-0 left-0 w-full z-50 drop-shadow-md"
    x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">
            <div class="flex items-center">
                <a href="{{ url('/') }}/" class="shrink-0 flex items-center justify-between">
                    <img class="size-20 pr-3 w-20" src="{{ asset('storage/' . $profile['logo']) }}" alt="Your Company">
                    <div id="text-logo"
                        class="text-blue-950 {{ $page == 'Home' ? 'md:text-white' : '' }}  rounded-md px-3 py-2 text-sm lg:text-3xl font-bold "
                        aria-current="page"><span
                            style="text-transform: uppercase">{{ $profile['nama_sekolah'] }}</span>
                        <p class="text-sm font-normal"></p>
                    </div>
                </a>

            </div>
            <div class="flex items-center">
                <div class="hidden">
                    {{ $menu = $page == 'Home' ? true : false }}

                </div>

                <div class="hidden md:block ml-auto">
                    <div class="ml-10 flex items-baseline space-x-4">

                        {{-- start profile sekolah --}}
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="{{ $page == 'Home' ? 'text-white' : 'text-dark' }} font-medium  flex items-center justify-between w-full py-2 px-3 md:hover:bg-transparent md:border-0 hover:text-yellow-500 md:p-0 md:w-auto  ">Profile
                            Sekolah
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                id="dropdownNavbarLink" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44  ">
                            <div class="py-1">
                                <x-sub-nav-link href="{{ url('/') }}/sambutan" :active="request()->is('/')">Kata
                                    Sambutan</x-sub-nav-link>
                            </div>
                            <div class="py-1">
                                <x-sub-nav-link href="{{ url('/') }}/sejarah"
                                    :active="request()->is('/')">Sejarah</x-sub-nav-link>
                            </div>
                            <div class="py-1">
                                <x-sub-nav-link href="{{ url('/') }}/visimisi" :active="request()->is('/')">Visi &
                                    Misi</x-sub-nav-link>
                            </div>
                            <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                                <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-3 py-2 hover:bg-gray-100  ">Struktur
                                        Organisasi<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <div id="doubleDropdown"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 ">
                                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="doubleDropdownButton">
                                            <li>
                                                <x-sub-nav-link href="{{ url('/') }}/organisasi/sekolah"
                                                    :active="request()->is('/')">Sekolah</x-sub-nav-link>
                                            </li>
                                            <li>
                                                <x-sub-nav-link href="{{ url('/') }}/organisasi/komite"
                                                    :active="request()->is('/')">Komite
                                                    Sekolah</x-sub-nav-link>
                                            </li>

                                        </ul>
                                    </div>
                                </li>


                            </ul>
                            <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                                <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton2" data-dropdown-toggle="doubleDropdown2"
                                        data-dropdown-placement="right-start" type="button"
                                        class="flex items-center justify-between w-full px-3 py-2 hover:bg-gray-100  ">Staf
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg></button>
                                    <div id="doubleDropdown2"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 ">
                                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="doubleDropdownButton2">
                                            <li>
                                                <x-sub-nav-link href="{{ url('/') }}/staf/pendidik"
                                                    :active="request()->is('/')">Tenaga
                                                    Pendidik</x-sub-nav-link>
                                            </li>
                                            <li>
                                                <x-sub-nav-link href="{{ url('/') }}/staf/kependidikan"
                                                    :active="request()->is('/')">Tenaga
                                                    Kepenidikan</x-sub-nav-link>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        {{-- end profile sekolah --}}


                        {{-- start berita --}}
                        <button id="dropdownNavbarLink3" data-dropdown-toggle="dropdownNavbar3"
                            class="{{ $page == 'Home' ? 'text-white' : 'text-dark' }} font-medium  flex items-center justify-between w-full py-2 px-3 md:hover:bg-transparent md:border-0 hover:text-yellow-500 md:p-0 md:w-auto     md:">Berita
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                id="dropdownNavbarLink2" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>

                        <div id="dropdownNavbar3"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44  ">
                            <div class="py-1">
                                <x-sub-nav-link href="{{ url('/') }}/berita" :active="request()->is('/')">Berita
                                    Terbaru</x-sub-nav-link>
                            </div>
                            <div class="py-1">
                                <x-sub-nav-link href="{{ url('/') }}/info" :active="request()->is('/')">Info
                                    Sekolah</x-sub-nav-link>
                            </div>
                        </div>
                        {{-- end berita --}}

                        {{-- start layanan --}}

                        <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2"
                            class="{{ $page == 'Home' ? 'text-white' : 'text-dark' }} font-medium  flex items-center justify-between w-full py-2 px-3 md:hover:bg-transparent md:border-0 hover:text-yellow-500 md:p-0 md:w-auto     md:">Layanan
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                id="dropdownNavbarLink2" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>

                        <div id="dropdownNavbar2"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44  ">
                            <div class="py-1">
                                <x-sub-nav-link href="{{ url('/') }}/ekstrakurikuler"
                                    :active="request()->is('/')">Ekstrakurikuler</x-sub-nav-link>
                            </div>
                            <div class="py-1">
                                <x-sub-nav-link href="{{ url('/') }}/laboratorium"
                                    :active="request()->is('/')">Laboratorium</x-sub-nav-link>
                            </div>
                            <div class="py-1">
                                <x-sub-nav-link href="{{ url('/') }}/perpustakaan"
                                    :active="request()->is('/')">Perpustakaan</x-sub-nav-link>
                            </div>


                        </div>

                        {{-- end layanan --}}
                        <x-nav-link href="{{ url('/') }}/prestasi" :page=$menu :active="request()->is('tentang')">Prestasi
                        </x-nav-link>
                        <x-nav-link href="{{ url('/') }}/kontak" :page=$menu :active="request()->is('kontak')">Kontak
                        </x-nav-link>

                    </div>
                </div>

            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen" id="hamburgerMenu"
                    class="relative inline-flex items-center justify-center rounded-md bg-transparent p-2 text-dark hover:bg-transparent hover:text-white focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 focus:ring-offset-sky-200"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg :class="{ 'hidden': !isOpen, 'block': isOpen }" class="hidden size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            {{-- start profile sekolah --}}
            <div class="text-dark font-medium  w-full pt-2 px-3">
                <button id="mobileDropdownButton"
                    class="flex items-center justify-between w-full md:hover:bg-transparent md:border-0 hover:text-yellow-500 md:p-0 md:w-auto     md: cursor-pointer text-sm pb-2 border-b border-gray-400">
                    Profile Sekolah
                    <svg class="w-2.5 h-2.5 ms-2.5 -rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        id="dropdownNavbarLink1" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="mobileDropdownContent" class="hidden mt-2">
                    <x-sub-nav-link href="{{ url('/') }}/sambutan" :active="request()->is('/')">Kata
                        Sambutan</x-sub-nav-link>
                    <x-sub-nav-link href="{{ url('/') }}/sejarah" :active="request()->is('/')">Sejarah</x-sub-nav-link>
                    <x-sub-nav-link href="{{ url('/') }}/visimisi" :active="request()->is('/')">Visi &
                        Misi</x-sub-nav-link>

                    <div class="text-dark font-medium  w-full py-2 pl-3 md:px-3">
                        <button id="mobileDropdownButton11"
                            class="flex items-center justify-between w-full md:hover:bg-transparent md:border-0 hover:text-yellow-500 md:p-0 md:w-auto   focus:   cursor-pointer text-sm pb-2 border-b border-gray-400">
                            Struktur Organisasi
                            <svg class="w-2.5 h-2.5 ms-2.5 -rotate-90" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" id="dropdownNavbarLink11" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>

                        </button>
                        <div id="mobileDropdownContent11" class="hidden  mt-2">
                            <x-sub-nav-link href="{{ url('/') }}/organisasi/sekolah"
                                :active="request()->is('/')">Sekolah</x-sub-nav-link>
                            <x-sub-nav-link href="{{ url('/') }}/organisasi/komite" :active="request()->is('/')">Komite
                                Sekolah</x-sub-nav-link>
                        </div>
                    </div>
                    <div class="text-dark font-medium  w-full pl-3 md:px-3">
                        <button id="mobileDropdownButton12"
                            class="flex items-center justify-between w-full  md:hover:bg-transparent md:border-0 hover:text-yellow-500 md:p-0 md:w-auto  cursor-pointer text-sm pb-2 border-b border-gray-400">
                            Staf
                            <svg class="w-2.5 h-2.5 ms-2.5 -rotate-90" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" id="dropdownNavbarLink12" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="mobileDropdownContent12" class="hidden  mt-2">
                            <x-sub-nav-link href="{{ url('/') }}/staf/pendidik" :active="request()->is('/')">Tenaga
                                Pendidik</x-sub-nav-link>
                            <x-sub-nav-link href="{{ url('/') }}/staf/kependidikan" :active="request()->is('/')">Tenaga
                                Kepenidikan</x-sub-nav-link>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end profile sekolah --}}

            {{-- start berita --}}
            <div class="text-dark font-medium  w-full py-2 px-3">
                <button id="mobileDropdownButton2"
                    class="flex items-center justify-between w-full md:hover:bg-transparent md:border-0 hover:text-yellow-500 md:p-0 md:w-auto  cursor-pointer text-sm pb-2 border-b border-gray-400">
                    Berita
                    <svg class="w-2.5 h-2.5 ms-2.5 -rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        id="dropdownNavbarLink4" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="mobileDropdownContent2" class="hidden mt-2">
                    <x-sub-nav-link href="{{ url('/') }}/berita" :active="request()->is('/')">Berita
                        Terbaru</x-sub-nav-link>
                    <x-sub-nav-link href="{{ url('/') }}/info" :active="request()->is('/')">Info Sekolah</x-sub-nav-link>
                </div>
            </div>
            {{-- end berita --}}

            {{-- start layanan --}}

            <div class="text-dark font-medium  w-full px-3">
                <button id="mobileDropdownButton3"
                    class="flex items-center justify-between w-full md:hover:bg-transparent md:border-0 hover:text-yellow-500 md:p-0 md:w-auto  cursor-pointer text-sm pb-2 border-b border-gray-400">
                    Layanan
                    <svg class="w-2.5 h-2.5 ms-2.5 -rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        id="dropdownNavbarLink5" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="mobileDropdownContent3" class="hidden mt-2">
                    <x-sub-nav-link href="{{ url('/') }}/ekstrakurikuler"
                        :active="request()->is('/')">Ekstrakurikuler</x-sub-nav-link>
                    <x-sub-nav-link href="{{ url('/') }}/laboratorium"
                        :active="request()->is('/')">Laboratorium</x-sub-nav-link>
                    <x-sub-nav-link href="{{ url('/') }}/perpustakaan"
                        :active="request()->is('/')">Perpustakaan</x-sub-nav-link>
                </div>
            </div>



            {{-- end layanan --}}
            <x-nav-link href="{{ url('/') }}/prestasi" :page=$menu :mobile=true :active="request()->is('/')">Prestasi
            </x-nav-link>
            <x-nav-link href="{{ url('/') }}/kontak" :page=$menu :mobile=true :last=true
                :active="request()->is('/')">Kontak
            </x-nav-link>

        </div>

    </div>
</nav>

<script>
    // Mobile Dropdown

    // profile sekolah
    const mobileDropdownButton = document.getElementById('mobileDropdownButton');
    const mobileDropdownContent = document.getElementById('mobileDropdownContent');
    const dropdownNavbarLink1 = document.getElementById('dropdownNavbarLink1');

    mobileDropdownButton.addEventListener('click', () => {
        mobileDropdownContent.classList.toggle('hidden');
        dropdownNavbarLink1.classList.toggle('-rotate-90');
    });

    // struktur organisasi
    const mobileDropdownButton11 = document.getElementById('mobileDropdownButton11');
    const mobileDropdownContent11 = document.getElementById('mobileDropdownContent11');
    const dropdownNavbarLink211 = document.getElementById('dropdownNavbarLink11');

    mobileDropdownButton11.addEventListener('click', () => {
        mobileDropdownContent11.classList.toggle('hidden');
        dropdownNavbarLink11.classList.toggle('-rotate-90');
    });

    // staf
    const mobileDropdownButton12 = document.getElementById('mobileDropdownButton12');
    const mobileDropdownContent12 = document.getElementById('mobileDropdownContent12');
    const dropdownNavbarLink12 = document.getElementById('dropdownNavbarLink12');

    mobileDropdownButton12.addEventListener('click', () => {
        mobileDropdownContent12.classList.toggle('hidden');
        dropdownNavbarLink12.classList.toggle('-rotate-90');
    });

    // berita
    const mobileDropdownButton2 = document.getElementById('mobileDropdownButton2');
    const mobileDropdownContent2 = document.getElementById('mobileDropdownContent2');
    const dropdownNavbarLink4 = document.getElementById('dropdownNavbarLink4');

    mobileDropdownButton2.addEventListener('click', () => {
        mobileDropdownContent2.classList.toggle('hidden');
        dropdownNavbarLink4.classList.toggle('-rotate-90');
    });

    // layanan
    const mobileDropdownButton3 = document.getElementById('mobileDropdownButton3');
    const mobileDropdownContent3 = document.getElementById('mobileDropdownContent3');
    const dropdownNavbarLink5 = document.getElementById('dropdownNavbarLink5');

    mobileDropdownButton3.addEventListener('click', () => {
        mobileDropdownContent3.classList.toggle('hidden');
        dropdownNavbarLink5.classList.toggle('-rotate-90');
    });
</script>
