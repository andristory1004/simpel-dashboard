<?php

namespace App\Http\Controllers;

use App\Models\Tps;
use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;

class TpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Data Provinsi
        $provinces = Province::all();

        $data = Tps::all();
        return view('pages.dataTps', compact('provinces'), ['data'=>$data]);
    }

    // Get data daerah by Id

    function getKabupaten(request $request){
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        $option = "<option>Kabupaten/Kota</option>";
        foreach($kabupatens as $kabupaten){
            $option.="<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
        echo $option;
    }

    function getKecamatan(request $request){
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        $option = "<option>Kecamatan</option>";
        foreach($kecamatans as $kecamatan){
            $option.="<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $option;
    }

    function getKelurahan(request $request){
        $id_kecamatan = $request->id_kecamatan;

        $kelurahans = Village::where('district_id', $id_kecamatan)->get();

        $option = "<option>Kelurahan</option>";
        foreach($kelurahans as $kelurahan){
            $option.="<option value='$kelurahan->id'>$kelurahan->name</option>";
        }
        echo $option;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'required' => 'Kolom : attribute Tabel tidak boleh kosong..!',
        ];

        // Validasi Required
        $validasi = $request->validate([
            'provinsi_id' => 'required',
            'kabupaten_id' => 'required',
            'kecamatan_id' => 'required',
            'kelurahan_id' => 'required',
            'no_tps' => 'required',
            'kebutuhan' => 'required',
        ],$message);

        // Validasi data boleh kosong
        $validasi['keterangan']="";
        Tps::create($validasi);
        return redirect('tps')->with('success', 'Data berhasil di simpan..!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data = Tps::findOrFail($request->get('id'));
        echo json_encode($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tps::destroy($id);
        return redirect('tps')->with('susscess', 'Hapus Data Berhasil');
    }
}