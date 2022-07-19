@extends('layouts.admin')
@section('title', 'Operator')
@section('main')
<div class="bg-blue">
    <div class="flex items-center justify-between px-5 py-3 bg-green rounded-tl-3xl">
        <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">Daftar Operator</h1>
        {{-- <button
        class="px-3 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded-md shadow-md bg-blue hover:bg-green md:text-lg lg:txt-lg hover:text-black"
            data-bs-target="#modal" data-bs-toggle="modal">
            <i class="fas fa-plus"></i>
            Tambah Operator
        </button> --}}
        <a href={{route('operator.create')}} class="px-3 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded-md shadow-md bg-blue hover:bg-green md:text-lg lg:txt-lg hover:text-black">
            <i class="fas fa-plus"></i>
            Tambah Operator
        </a>
    </div>
</div>
<div class="p-3 overflow-auto">
    <table class="min-w-full bg-white border-2 border-black">
        <thead class="text-white bg-gray-800 border-2 border-black">
            <tr class="text-sm font-semibold text-center uppercas">
                <th class="w-auto px-4 py-3 border-r-2 border-white">No</a></th>
                <th class="w-3/12 px-4 py-3 border-r-2 border-white">Nama</th>
                <th class="w-3/12 px-4 py-3 border-r-2 border-white">Email</th>
                <th class="w-2/12 px-4 py-3 border-r-2 border-white">No Telepon</th>
                <th class="w-2/12 px-4 py-3 border-r-2 border-white">Hak Akses</th>
                <th class="w-2/12 px-4 py-3 border-r-2 border-white">Riwayat Login</th>
                <th class="w-2/12 px-4 py-3 border-r-2 border-white">Status</th>
                <th class="w-1/12 px-4 py-3 ">Aksi</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <?php $no=1; ?>
            @foreach ($data as $operator)
            <tr class="text-xs md:text-sm lg:text-sm">
                <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black">{{$no++}}</td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">{{$operator->nama}}</button></td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">{{$operator->email}}</button></td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">{{$operator->no_telepon}}</button></td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">{{$operator->hak_akses}}</button></td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">{{$operator->riwayat}}</button></td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">{{$operator->status}}</button></td>
                <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black">
                    <form action={{route('operator.destroy', $operator->id)}} method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Input TPS -->
<div class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
    id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="relative w-auto pointer-events-none modal-dialog">
        <div
            class="relative flex flex-col w-full text-current bg-white border-none shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding rounded-b-2xl rounded-t-3xl">
            {{-- Title Modal --}}
            <div class="px-3 py-3 bg-blue rounded-t-2xl">
                <h1 class="text-3xl font-bold text-black">Form Operator</h1>
            </div>
            {{-- End Titel Modal --}}
            <div>
                <div class="py-3 mx-5 mt-5 mb-5 text-center bg-gray-300 rounded-t-md">
                    <h1 class="text-2xl font-bold text-black ">Data Operator</h1>
                </div>
                <form action={{route('operator.store')}} method="POST" class="mx-5 mb-3 space-y-3">
                    @csrf
                    <div class="space-y-3">
                        <input type="text"
                            class=" form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            name="nama" id="nama" placeholder="Nama" />
                            <input type="email"
                            class=" form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            name="email" id="email" placeholder="Email" />
                            <input type="number"
                            class=" form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            name="no_telepon" id="no_telepon" placeholder="No Telepon" />
                            <select
                            class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            name="hak_akses" id="hak_akses" aria-label=".form-select-lg example">
                            <option selected>Hak Akses</option>
                            <option value="Super Admin">Super Admin</option>
                            <option value="Admin">Admin</option>
                            <option value="View Only">View Only</option>
                        </select>
                        <select
                            class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none disable"
                            name="status" id="status" aria-label=".form-select-lg example" disabled>
                            <option selected>Status</option>
                            <option value="Super Admin">Aktif</option>
                            <option value="Admin">Tidak Aktif</option>
                        </select>
                    </div>
                    {{-- Button Modal --}}
                    <div class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 space-x-5 border-t border-gray-200 modal-footer rounded-b-md">
                        <button
                            type="submit">
                            <div class="px-5 py-2 transition duration-150 ease-in-out rounded shadow-md bg-blue hover:scale-110">
                                
                                <h1 class="text-sm font-bold text-white md:text-xl lg:text-xl">Simpan</h1>
                            </div>
                        </button>
                        <button
                            class="flex items-center px-5 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded shadow-md md:text-xl lg:text-xl bg-red hover:scale-110"
                            data-bs-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                              </svg>
                            <span>Tutup</span>
                        </button>
                    </div>
                {{-- End Button Modal --}}
                </form>
            </div>
{{-- End Modal Input TPS --}}
@endsection