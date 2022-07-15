<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Masuk</title>
    @vite('resources/css/app.css')

    {{-- Tailwind Element --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Kalam:wght@300&family=Lobster&family=Satisfy&display=swap" rel="stylesheet">
</head>
<body>
    <div class="flex bg-cover bg-center h-screen" style="background-image: url({{asset('images/bg-kantor-2.jpg')}})">
        <div class="w-1/2 px-16">
            <div class="font-kalam font-bold text-white mt-16 mb-5">
                <p class="text-3xl">SIMPEL</p>
                <p class="text-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed natus obcaecati ex dolore saepe quis dolores qui dolorem provident.
                </p>
            </div>
            <div class="block p-6 rounded-lg shadow-lg bg-black w-full bg-opacity-70">
                @if (session()->has('loginError'))
                    <div class="bg-red-100 rounded-lg py-5 px-6 text-base text-red-700 mb-3" role="alert">
                        {{session('loginError')}}
                    </div>
                @endif
                <form action={{route('authenticate')}} method="POST">
                    @csrf
                    <div class="form-group mb-6 ">
                        <label for="email" class="form-label inline-block mb-2 text-white">Email</label>
                        <input type="email" class="form-control block  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        name="email" id="email" aria-describedby="emailHelp" placeholder="Masukan Email" required>
                        @error('email')
                            <div class="">
                                {{$message}}
                            </div>    
                        @enderror
                    </div>
                    <div class="form-group mb-6">
                        <label for="password" class="form-label inline-block mb-2 text-white">Password</label>
                        <input type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
                        name="password" id="password" placeholder="Masukan Password" required>
                        @error('email')
                            <div class="">
                                {{$message}}
                            </div>    
                        @enderror
                    </div>
                    <div class="flex justify-between items-center mb-6">
                        <div class="form-group form-check">
                            <input type="checkbox"
                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                id="checkBox">
                            <label class="form-check-label inline-block text-white" for="checkBox">Ingatkan Saya</label>
                        </div>
                        <a href="#!"
                            class="text-blue-600 hover:text-blue-700 focus:text-blue-700 transition duration-200 ease-in-out font-bold">
                            Lupa Password..?
                        </a>
                    </div>
                    <button type="submit" 
                        class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                        Masuk
                    </button>
                    <p class="text-white mt-6 text-center">
                        Tidak Punya Akun..?
                        <a href={{route('register.index')}} class="text-blue-600 hover:text-blue-700 focus:text-blue-700 transition duration-200 ease-in-out font-bold">
                            Register
                        </a>
                    </p>
                </form>
            </div>
        </div>
        <div class="w-1/2 h-screen">
            {{-- <img class="w-3/4" src={{asset('images/foto.jpg')}} alt="" srcset=""> --}}
        </div>
    </div>
</body>
</html>