@extends('layouts.admin')

@section('title', 'Input Saksi')
    
@section('main')
    <div>
        <form action={{route('saksi.store')}} method="post">
            @csrf
            <div class="bg-blue">
                <div class="flex items-center justify-between px-5 py-3 bg-green rounded-tl-3xl">
                    <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">Input Data Saksi</h1>
                </div>
            </div>
            <div class="py-3 mx-5 mt-5 mb-5 text-center bg-gray-300 rounded-t-md">
                <h1 class="text-xl font-bold text-black md:text-2xl lg:text-2xl font-oswald">Data Saksi</h1>
            </div>
            <div class="mx-5 mb-3 space-y-3">
                <div class="flex space-x-5">
                    <input type="number"
                        class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        name="nik" id="nik" placeholder="Nik" value={{old('nik')}} />
                        
                    <input type="text"
                        class=" form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        name="nama" id="nama" placeholder="Nama Saksi" />
                </div>
                <div class="flex space-x-5">
                    <input type="email"
                        class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        name="email" id="email" placeholder="Email" />
                        
                    <input type="number"
                        class=" form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        name="no_telepon" id="no_telepon" placeholder="No Telepon" value={{old('no_telepon')}} />
                </div>
                <div class="flex space-x-5">
                    <select
                        class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-bases font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label=".form-select-lg example" name="provinsi_id" id="provinsi">
                        <option selected>Provinsi</option>
                        @foreach ($provinces as $provinsi)
                            <option value={{$provinsi->id}}>{{$provinsi->name}}</option>
                        @endforeach
                    </select>
                    <select
                        class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label=".form-select-lg example" name="kabupaten_id" id="kabupaten">
                        <option selected>Kabupaten/Kota</option>
                    </select>
                </div>
                <div class="flex space-x-5">
                    <select
                        class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label=".form-select-lg example" name="kecamatan_id" id="kecamatan">
                        <option selected>Kecamatan</option>
                    </select>
                    <select
                        class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label=".form-select-lg example" name="kelurahan_id" id="kelurahan">
                        <option selected>Kelurahan</option>
                    </select>
                </div>
                <div class="flex space-x-5">
                    <input type="number"
                        class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        name="no_tps" id="no_tps" placeholder="No TPS" />
                </div>
                <div class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 space-x-5 border-t border-gray-200 modal-footer rounded-b-md">
                    <button type="submit">
                        <div class="px-5 py-2 transition duration-150 ease-in-out rounded shadow-md bg-blue hover:scale-110">
                            <h1 class="text-sm font-bold text-white md:text-xl lg:text-xl">Simpan</h1>
                        </div>
                    </button>
                    <a href={{route('saksi.index')}} class="flex items-center px-5 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded shadow-md md:text-xl lg:text-xl bg-red hover:scale-110">
                        X Tutup
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection