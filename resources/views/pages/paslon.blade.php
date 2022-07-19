@extends('layouts.admin')
@section('title', 'Pasangan Calon')
    
@section('main')
<div class="bg-blue">
    <div class="flex items-center justify-between px-5 py-3 bg-green rounded-tl-3xl">
        <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">Daftar Paslon</h1>
        <a href={{route('paslon.create')}} 
        class="px-3 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded-md shadow-md bg-blue hover:bg-green md:text-lg lg:txt-lg hover:text-black">
            <i class="fas fa-plus"></i>
            Tambah Paslon
        </a>
    </div>
</div>
<div class="w-1/2 mx-auto mt-5">
    <p class="text-3xl text-center text-black font-acme">Pemilihan Umum Presiden</p>
</div>
<div class="px-5 pt-5 ">
    <div class="flex flex-wrap justify-center">
        <div class="mx-5 my-5 w-250 h-400 bg-green rounded-xl">
            <div class="w-250 h-320 bg-blue rounded-t-xl">

            </div>
            <div class="flex items-center px-2 py-2 space-x-3 w-250">
                <div class="flex items-center justify-center rounded-full w-14 h-14 bg-blue">
                    <p class="text-2xl text-white font-kalam">1</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl text-white font-kalam">Joko Widodo</p>
                    <p class="text-2xl text-white font-kalam">Ma'ruf Amin</p>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection