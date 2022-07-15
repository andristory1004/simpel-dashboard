<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')

    {{-- Tailwind Element --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">

    {{-- Pie Chart --}}
    <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>

    {{-- Chart --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Kalam:wght@300&family=Lobster&family=Satisfy&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="fixed w-full px-5 py-5 bg-black md:px-10 bg-opacity-40">
        <div class=""> 
            {{-- Nabar Desktop --}}
            <div class="flex justify-between text-xl text-white font-acme">
                <div class="">
                    <p>SIMPEL</p>
                </div>
                <div class="hidden space-x-5 md:block">
                    <a href="">Beranda</a>
                    <a href="#tentang">Tentang</a>
                    <a href="">Fitur</a>
                    <a href="">Kontak</a>
                </div>
                <div class="hidden space-x-5 md:block">
                    <a href={{route('login')}} class="transition duration-200 ease-in-out hover:text-blue-700">Masuk</a>
                    <a href={{route('register.index')}}>Daftar</a>
                </div>
                {{-- Navbar Mobile --}}
                <button type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false"
                    class="text-2xl text-white bg-red md:hidden ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <div id="collapse" class="w-full pt-3 mt-5 space-y-3 text-xl text-white border-t-2 collapse font-acme">
                <a href="" class="block">Home</a>
                <a href="" class="block">Tentang</a>
                <a href="" class="block">Fitur</a>
                <a href="" class="block">Kontak</a>
                <div class="space-x-5 text-center">
                    <a href="" >Masuk</a>
                    <a href={{route('register.index')}} >Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="h-screen bg-black bg-bottom bg-no-repeat bg-cover" style="background-image: url({{asset('images/bg-demonstrasi.jpg')}}) ">
        <div class="py-64 space-y-5 text-center text-white">
            <p class="text-2xl font-bold font-kalam md:text-4xl" style="text-shadow: 3px 4px 3px black;">Selamat Datang di Website SIMPEL</p>
            <p class="text-4xl font-bold font-kalam md:text-7xl" style="text-shadow: 3px 5px 3px black;">Sistem Pemenangan Pemilu</p>
        </div>
    </div>
    <div id="tentang" class="h-screen text-white bg-black bg-no-repeat bg-cover" style="background-image: url({{asset('images/peta-indonesia.png')}})">
        <div class="pt-20 text-center text-white md:pt-24">
            <p class="space-x-3 text-4xl font-bold font-acme"><span class="text-red">Tentang</span><span>SIMPEL</span></p>
            <p class="mx-5 mt-3 text-sm font-bold lg:w-1/2 lg:mx-auto font-kalam md:mt-5 md:mx-10 md:text-base">
                <span class="text-lg md:text-2xl">SIMPEL</span> adalah Aplikasi Pemenangan Pemilu yang akan menjadi solusi untuk menejemen suatu organisai / partai politik dalam rangka Pemenangan Pemilu, tidak hanya memenejemen poting suara, aplikasi ini juga dirancang dari berbagai segi aspek Pemenangan pemilu, baik perolehan suara secara real count, menejemen relawan bahkan dari segi aspek finansialnya. 
            </p>
        </div>
    </div>
</body>
</html>
