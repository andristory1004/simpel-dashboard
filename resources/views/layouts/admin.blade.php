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
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&display=swap" rel="stylesheet">

    {{-- Pie Chart --}}
    <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>

    {{-- Chart --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    
</head>
<body>
    <div class="flex">
    <aside class="relative hidden w-64 h-screen bg-blue lg:block">

        <div class="px-6 pt-6 pb-2 text-center ">
            <a href="index.html"
                class="text-3xl font-semibold text-white uppercase hover:text-gray-300 font-Oswald">SIMPEL</a>
        </div>

        <div class="h-1 m-5 bg-white rounded-full"></div>
            <nav class="pt-2 mb-5 text-base font-bold text-white">
                <a href={{route('dashboard')}}
                    class="{{request()->is('dashboard') ? 'text-black bg-white rounded-l-full font-bold' : '' }} flex items-center py-3 pl-3 nav-item ml-2 hover:text-black hover:bg-white hover:rounded-l-full my-2">
                    <i class="mr-3 fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
                <a href={{route('tps.index')}}
                    class="{{ request()->is('tps') ? 'text-black bg-white rounded-l-full font-bold' : '' }} flex items-center py-3 pl-3 nav-item ml-2 hover:text-black hover:bg-white hover:rounded-l-full my-2">
                    <i class="mr-3 fas fa-table"></i>
                    Data TPS
                </a>
                <a href={{route('paslon.index')}}
                    class="{{ request()->is('paslon') ? 'text-black bg-white rounded-l-full font-bold' : '' }} flex items-center py-3 pl-3 nav-item ml-2 hover:text-black hover:bg-white hover:rounded-l-full my-2">
                    <i class="mr-3 fas fa-user-tie"></i>
                    Pasangan Calon
                </a>
                <a href={{route('operator.index')}}
                    class="{{ request()->is('operator') ? 'text-black bg-white rounded-l-full font-bold' : '' }} flex items-center py-3 pl-3 nav-item ml-2 hover:text-black hover:bg-white hover:rounded-l-full my-2">
                    <i class="mr-3 fas fa-users"></i>
                    Operator
                </a>
                {{-- Dropdown --}}
                <button data-bs-toggle="dropdown" aria-expanded="false"
                        class="{{request()->is('saksi') ? 'text-black bg-white rounded-l-full font-bold' : '' }} flex items-center py-3 pl-3 nav-item  hover:text-black hover:bg-white hover:rounded-l-full my-2  ml-2 w-full">
                        <i class="mr-3 fas fa-id-card"></i>
                    Data Saksi
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                        </path>
                    </svg>
                </button>
                
                <ul 
                    class="absolute z-50 hidden float-left w-full py-2 m-0 mt-1 text-base font-bold text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu bg-clip-padding"
                    aria-labelledby="dropdownMenuButton1u">
                    <li>
                        <a
                            class="block w-full px-4 py-2 text-sm text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-100"
                            href={{route('saksi.index')}}>
                            List Saksi
                        </a>
                    </li>
                    <li>
                        <a
                            class="block w-full px-4 py-2 text-sm text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-100"
                            href="">
                            Monitoring Saksi
                        </a>
                    </li>
                </ul>
                {{-- End Dropdown --}}

                {{-- Dropdown --}}
                <button data-bs-toggle="dropdown" aria-expanded="false"
                        class="{{ request()->is('list-quick-count', 'grafik-quick-count') ? 'text-black bg-white rounded-l-full font-bold' : '' }} flex items-center py-3 pl-3 nav-item  hover:text-black hover:bg-white hover:rounded-l-full my-2  ml-2 w-full">
                    <i class="mr-3 fas fa-chart-area"></i>
                    Quick Count
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                        </path>
                    </svg>
                </button>
                
                <ul 
                    class="absolute z-50 hidden float-left w-full py-2 m-0 mt-1 text-base font-bold text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu bg-clip-padding"
                    aria-labelledby="dropdownMenuButton1u">
                    <li>
                        <a
                            class="block w-full px-4 py-2 text-sm text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-100"
                            href="">
                            Input Quick Count
                        </a>
                    </li>
                    <li>
                        <a
                            class="block w-full px-4 py-2 text-sm text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-100"
                            href="">
                            Grafik Quick Count
                        </a>
                    </li>
                </ul>
                {{-- End Dropdown --}}

                {{-- Dropdown --}}
                <button data-bs-toggle="dropdown" aria-expanded="false"
                        class="{{ request()->is('list-real-count', 'grafik-real-count') ? 'text-black bg-white rounded-l-full font-bold' : '' }} flex items-center py-3 pl-3 nav-item  hover:text-black hover:bg-white hover:rounded-l-full my-2  ml-2 w-full">
                    <i class="mr-3 fas fa-chart-line"></i>
                    Real Count
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                        </path>
                    </svg>
                </button>
                <ul 
                    class="absolute z-50 hidden float-left w-full py-2 m-0 mt-1 text-base font-bold text-left list-none bg-white border-none rounded-lg shadow-lg dropdown-menu bg-clip-padding"
                    aria-labelledby="dropdownMenuButton1u">
                    <li>
                        <a
                            class="block w-full px-4 py-2 text-sm text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-100"
                            href="">
                            Input Real Count
                        </a>
                    </li>
                    <li>
                        <a
                            class="block w-full px-4 py-2 text-sm text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-100"
                            href="">
                            Grafik Real Count
                        </a>
                    </li>
                </ul>
                {{-- End Dropdown --}}
                <a href=""
                    class="{{ request()->is('operator') ? 'text-black bg-white rounded-l-full font-bold' : '' }} flex items-center py-3 pl-3 nav-item ml-2 hover:text-black hover:bg-white hover:rounded-l-full my-2">
                    <i class="mr-3 fas fa-coins"></i>
                    Finance
                </a>
            </nav>
    </aside>

    <div class="flex flex-col w-full h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="items-center w-full px-6 py-2 bg-blue lg:flex hidden">
            <div class="w-1/2"></div>
            <div class="w-full">
                <h1 class="text-3xl text-white font-lobster">Sistem Pemenangan Pemilu</h1>
            </div>
            @auth
            <div x-data="{ isOpen: false }" class="relative flex justify-end w-1/2">
                <button @click="isOpen = !isOpen" class="flex items-center space-x-3">
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp" class="w-10 rounded-full shadow-lg"
                        alt="Avatar" />
                    <h1 class="text-white font-lobster">{{auth()->user()->name}}</h1>
                    <i class="text-white fas fa-caret-down"></i>
                </button>
                <button x-show="isOpen" @click="isOpen = false"
                    class="fixed inset-0 w-full h-full cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 py-2 mt-10 bg-white rounded-lg shadow-lg">
                    <a href="#" class="block w-full px-4 py-2 text-sm font-bold text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-100">Account</a>
                    <a href="#" class="block w-full px-4 py-2 text-sm font-bold text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-100">Support</a>
                    {{-- <form action={{route('logout')}} method="POST"
                        class="block w-full px-4 py-2 text-sm font-bold text-gray-700 bg-transparent hover-bg-blue dropdown-item whitespace-nowrap hover:bg-gray-100">
                        @csrf
                        <button type="submit" class="">Keluar</button>
                    </form> --}}
                    <a href={{route('logout')}} class="block w-full px-4 py-2 text-sm font-bold text-gray-700 bg-transparent dropdown-item whitespace-nowrap hover:bg-gray-100">Keluar</a>
                </div>
            </div>
            @endauth
        </header>

        <!-- Mobile Header & Nav -->
        <header class="w-full py-5 bg-blue lg:hidden">
            <div class="flex items-center justify-between px-6">
                <a href="index.html" class="hidden text-3xl text-white hover:text-gray-300 font-lobster sm:block">Sistem Pemenangan Pemilu</a>
                <a href="index.html" class="text-3xl font-semibold text-white uppercase md:hidden hover:text-gray-300 sm:hidden">SIMPEL</a>
                <button id="menu-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample"
                    class="text-3xl text-white focus:outline-none">
                    <i id="menu-open" class="menu-open fas fa-bars"></i>
                    <i id="menu-close" class="hidden menu-close fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <div class="overflow-auto scroll-smooth">
                <nav class="flex flex-col max-h-screen px-6 pt-4 collapse" id="collapseExample">
                    <a href=""
                        class="{{request()->is('dashboard')? 'opacity-100 font-bold' : ''}} flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                    <a href=""
                        class="{{request()->is('data-tps')? 'opacity-100 font-bold' : ''}} flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-table"></i>
                        Data TPS
                    </a>
                    <a href={{route('paslon.index')}}
                        class="{{request()->is('paslon')? 'opacity-100 font-bold' : ''}} flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-user-tie"></i>
                        Pasangan Calon
                    </a>
                    <a href=""
                        class="{{request()->is('operator.index')? 'opacity-100 font-bold' : ''}} flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-users"></i>
                        Operator
                    </a>
                    {{-- collapse --}}
                    <a aria-expanded="false" aria-controls="real-count" data-bs-toggle="collapse" href="#dataSaksi" 
                        class="{{request()->is('saksi.index', 'monitoring-saksi')? 'opacity-100 font-bold' : ''}} flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-id-card"></i>
                        Data Saksi
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                            </path>
                        </svg>
                    </a>
                    <div class="ml-10 collapse" id="dataSaksi">
                        <a href=""
                        class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-clipboard-list"></i>
                        List Saksi
                    </a>
                    <a href=""
                        class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-desktop-arrow-down"></i>
                        Monitoring Saksi
                    </a>
                    </div>
                    {{-- end Collapse --}}
                    {{-- collapse --}}
                    <a href="#quickCount" aria-expanded="false" aria-controls="real-count" data-bs-toggle="collapse" 
                        class="{{request()->is('list-quick-count', 'grafik-quick-count')? 'opacity-100 font-bold' : ''}} flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-chart-area"></i>
                        Quick Count
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                            </path>
                        </svg>
                    </a>
                    <div class="ml-10 collapse" id="quickCount">
                        <a href=""
                        class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-calendar"></i>
                        Input Quick Count
                    </a>
                    <a href=""
                        class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-calendar"></i>
                        Grafik Quick Count
                    </a>
                    </div>
                    {{-- end Collapse --}}
                    {{-- collapse --}}
                    <a href="#realCount" aria-expanded="false" aria-controls="real-count" data-bs-toggle="collapse" 
                        class="{{request()->is('list-real-count', 'grafik-real-count')? 'opacity-100 font-bold' : ''}} flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-chart-line"></i>
                        Real Count
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                            </path>
                        </svg>
                    </a>
                    <div class="ml-10 collapse" id="realCount">
                        <a href=""
                        class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-calendar"></i>
                        Input Real Count
                    </a>
                    <a href=""
                        class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-calendar"></i>
                        Grafik Real Count
                    </a>
                    </div>
                    {{-- end Collapse --}}
                    <a href=""
                        class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-coins"></i>
                        Finance
                    </a>
                    <a href="#"
                        class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-user"></i>
                        Setting
                    </a>
                    <a href="#"
                        class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 hover:font-bold nav-item">
                        <i class="mr-3 fas fa-sign-out-alt"></i>
                        Sign Out
                    </a>
                    <button
                        class="flex items-center justify-center w-full py-2 mt-3 font-semibold bg-white rounded-lg shadow-lg cta-btn hover:shadow-xl hover:bg-gray-300">
                        <i class="mr-3 fas fa-arrow-circle-up"></i> Upgrade to Pro!
                    </button>
                </nav>
            </div>
        </header>

        <div class="flex flex-col w-full overflow-x-hidden">
            <main class="flex-grow w-full pb-5">
                @yield('main')
            </main>
        </div>
    </div>
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    
    <script>
        var chartOne = document.getElementById('chartOne');
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
{{-- Data Wilayah --}}
<script>
    $(function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $('#provinsi').on('change', function () {
        let id_provinsi = $('#provinsi').val();

        $.ajax({
            type: 'POST',
            url: "{{route('/get-kabupaten')}}",
            data: { id_provinsi: id_provinsi },
            cache: false,

            success: function (msg) {
                $('#kabupaten').html(msg);
            },
            error: function (data) {
                console.log('error:', data);
            }
        })
    })

    $('#kabupaten').on('change', function () {
        let id_kabupaten = $('#kabupaten').val();

        $.ajax({
            type: 'POST',
            url: "{{route('/get-kecamatan')}}",
            data: { id_kabupaten: id_kabupaten },
            cache: false,

            success: function (msg) {
                $('#kecamatan').html(msg);
            },
            error: function (data) {
                console.log('error:', data);
            }
        })
    })

    $('#kecamatan').on('change', function () {
        let id_kecamatan = $('#kecamatan').val();

        $.ajax({
            type: 'POST',
            url: "{{route('/get-kelurahan')}}",
            data: { id_kecamatan: id_kecamatan },
            cache: false,

            success: function (msg) {
                $('#kelurahan').html(msg);
            },
            error: function (data) {
                console.log('error:', data);
            }
        })
    })
});
</script>
</body>
</html>