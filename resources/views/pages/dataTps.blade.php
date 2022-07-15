@extends('layouts.admin')
@section('title', 'Data TPS')
@section('main')
<div class="bg-blue">
    <div class="flex items-center justify-between px-5 py-3 bg-green rounded-tl-3xl">
        <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">Daftar TPS</h1>
        <button
            class="px-3 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded-md shadow-md bg-blue hover:bg-green md:text-lg lg:txt-lg hover:text-black"
            data-bs-target="#inputTps" data-bs-toggle="modal">
            <i class="fas fa-plus"></i>
            Tambah TPS
        </button>
    </div>
</div>

<div class="p-3 overflow-auto">
    @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    <table class="max-w-full bg-white border-2 border-black">
        <thead class="text-white bg-gray-800 border-2 border-black">
            <tr class="text-sm font-semibold text-center uppercas">
                <th class="w-auto px-4 py-3 border-r-2 border-white">No</a></th>
                <th class="w-56 px-4 py-3 border-r-2 border-white">Provinsi</th>
                <th class="w-56 px-4 py-3 border-r-2 border-white">Kabupaten/Kota</th>
                <th class="w-56 px-4 py-3 border-r-2 border-white">Kecamatan</th>
                <th class="w-56 px-4 py-3 border-r-2 border-white">Kelurahan</th>
                <th class="w-32 px-4 py-3 border-r-2 border-white">No TPS</th>
                <th class="w-32 px-4 py-3 border-r-2 border-white">Kebutuhan</th>
                <th class="w-auto px-4 py-3">Keterangan</th>
                <th class="w-auto px-4 py-3" colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <?php $no=1; ?>
            @foreach ($data as $tps)
            <tr class="text-xs md:text-sm lg:text-sm">
                <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black">{{$no++}}</td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black">
                    <button class="text-left" data-bs-target="#modal" data-bs-toggle="modal" type="button">
                        {{$tps->provinsi->name}}
                    </button>
                </td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left"
                        data-bs-target="#editData" data-bs-toggle="modal" type="button">{{$tps->kabupaten->name}}</button>
                </td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left"
                        data-bs-target="#editData" data-bs-toggle="modal" type="button">{{$tps->kecamatan->name}}</button>
                </td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left"
                        data-bs-target="#editData" data-bs-toggle="modal" type="button">{{$tps->kelurahan->name}}</button>
                </td>
                <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center"
                        data-bs-target="#editData" data-bs-toggle="modal" type="button">TPS {{$tps->no_tps}}</button></td>
                <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center"
                        data-bs-target="#editData" data-bs-toggle="modal" type="button">{{$tps->kebutuhan}}</button>
                </td>
                <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black">
                    <button class="text-center" data-bs-target="#editData" data-bs-toggle="modal" type="button">
                        {{$tps->keterangan}}
                    </button>
                </td>
                <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black">
                    <button class="text-center" data-id={{$tps->id}} data-bs-target="#editTPS" data-bs-toggle="modal" type="button">
                        Edit
                    </button>
                </td>
                <td class="px-4 py-3 text-left border-b-2 border-black">
                    
                    <form action={{route('tps.destroy', )}} method="post">
                        @csrf
                        <button type="submit">
                            hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@include('modals.input-tps')
@include('modals.edit-tps')


{{-- Edit Data at Modal --}}
<script src="{{ asset('public/assets/js/jquery-3.1.1.min.js') }}"></script>
<script>
    $(document).ready(function() {
        //edit data
        $('.edit').on("click",function() {
            var id = $(this).attr('data-id');
            $.ajax({
                url : "{{route('tps.edit')}}?id="+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('#id').val(data.id);
                    $('#provinsi').val(data.provinsi_id);
                    $('#kabupaten_id').val(data.kabupaten_id);
                    $('#kecamatan_id').val(data.kecamatan_id);
                    $('#kelurahan_id').val(data.kelurahan_id);
                    $('#no_tps').val(data.no_tps);
                    $('#aku').val(data.kebutuhan);
                    $('#keterangan').val(data.keterangan);
                    
                    $('#modal-edit').modal('show');
                }
            });
        });

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

@endsection