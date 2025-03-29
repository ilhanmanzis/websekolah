<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" type="image/png" href="{{ url('/') }}/images/logo/logo.png">
    <title>{{ $title }}</title>

</head>

<body class="h-full">

    {{-- navbar --}}
    <x-navbar-home>
        <x-slot:page>{{ $page }}</x-slot:page>
    </x-navbar-home>

    {{-- banner --}}
    @if ($page == 'Home')
        <x-banner-home></x-banner-home>
    @endif



    <main class="bg-white">
        {{ $slot }}
    </main>

    <x-footer></x-footer>





    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

<script>
    document.addEventListener('scroll', () => {
        const navbar = document.getElementById('navbar-background');
        const linkColor = document.querySelectorAll('#link-text'); // Ambil semua elemen dengan id 'link-text'
        const logoColor = document.getElementById('text-logo');
        const hColor = document.getElementById('hamburgerMenu');
        const menuColor = document.querySelectorAll('#dropdownNavbarLink');
        const menuColor2 = document.querySelectorAll('#dropdownNavbarLink2');
        const menuColor3 = document.querySelectorAll('#dropdownNavbarLink3');
        const main = document.querySelector('#main-search');
        const mainPosition = main.offsetTop;
        const scrollPosition = window.scrollY;

        if (scrollPosition >= mainPosition) {
            navbar.classList.add('bg-white');
            navbar.classList.remove('lg:bg-transparent');
            navbar.classList.remove('md:bg-transparent');
            logoColor.classList.add('md:text-blue-950');
            logoColor.classList.remove('md:text-white');
            menuColor.forEach(menu => {
                menu.classList.add('text-dark');
                menu.classList.remove('text-white');
            })
            menuColor2.forEach(menu => {
                menu.classList.add('text-dark');
                menu.classList.remove('text-white');
            })
            menuColor3.forEach(menu => {
                menu.classList.add('text-dark');
                menu.classList.remove('text-white');
            })

            linkColor.forEach(link => {
                link.classList.add('md:text-dark');
                link.classList.remove('md:text-white');

            });
        } else {
            if (window.innerWidth > 768) {
                navbar.classList.remove('bg-white');
                navbar.classList.add('bg-transparent');
                linkColor.forEach(link => {
                    link.classList.remove('md:text-dark');
                    link.classList.add('md:text-white');
                });
            }

            logoColor.classList.add('md:text-white');
            logoColor.classList.remove('md:text-blue-950');
            menuColor.forEach(menu => {
                menu.classList.remove('text-dark');
                menu.classList.add('text-white');
            })
            menuColor2.forEach(menu => {
                menu.classList.remove('text-dark');
                menu.classList.add('text-white');
            })
            menuColor3.forEach(menu => {
                menu.classList.remove('text-dark');
                menu.classList.add('text-white');
            })

        }
    });
</script>

</html>
