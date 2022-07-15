@extends('layouts.admin')
@section('title', 'Monitoring Saksi')
@section('main')
<div class="bg-blue">
    <div class="flex items-center justify-between px-5 py-3 bg-green rounded-tl-3xl">
        <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">Monitoring Saksi</h1>
    </div>
</div>
<div class="p-3 overflow-auto">
    <table class="min-w-full bg-white border-2 border-black">
        <thead class="text-white bg-gray-800 border-2 border-black">
            <tr class="text-sm font-semibold text-center uppercas">
                <th class="w-auto px-4 py-3 border-r-2 border-white">No</a></th>
                <th class="w-auto px-4 py-3 border-r-2 border-white">Nama Provinsi</th>
                <th class="w-auto px-4 py-3 border-r-2 border-white">Jumlah TPS</th>
                <th class="w-auto px-4 py-3 border-r-2 border-white">Jumlah Saksi</th>
                <th class="w-auto px-4 py-3 border-r-2 border-white">Kebutuhan</th>
                <th class="w-auto px-4 py-3 ">Kekurangan</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <tr class="text-xs md:text-sm lg:text-sm">
                <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black">1</td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">Jawa Barat</button></td>
                <td class="text-center px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">20</button></td>
                <td class="text-center px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">5</button></td>
                <td class="text-center px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">15</button></td>
                <td class="text-center px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">10</button></td>
            </tr>
            <tr class="text-xs md:text-sm lg:text-sm">
                <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black">2</td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">Jawa Timur</button></td>
                        <td class="text-center px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">20</button></td>
                    <td class="text-center px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">5</button></td>
                    <td class="text-center px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">15</button></td>
                    <td class="text-center px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
            </tr>
            <tr class="text-xs md:text-sm lg:text-sm">
                <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black">3</td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">Sumatra</button></td>
                <td class="text-center px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">20</button></td>
                <td class="text-center px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">5</button></td>
                <td class="text-center px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">15</button></td>
                <td class="text-center px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">10</button></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection