<?php

namespace App\Http\Controllers;

use App\Models\Saksi;
use App\Models\Province;
use Illuminate\Http\Request;

class SaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $provinces = Province::all();
        $data = Saksi::all();

        return view('pages.list-saksi', compact('provinces'), ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        return view('form.input-saksi', compact('provinces'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message =  [
            'required' => 'Tabel tidak boleh kosong..!'
        ];
        $validasi =$request->validate([
            'nik'=> 'required|string|min:16',
            'nama' => 'required',
            'email' => 'required',
            'no_telepon' => 'required',
            'provinsi_id' => 'required',
            'kabupaten_id' => 'required',
            'kecamatan_id' => 'required',
            'kelurahan_id' => 'required',
            'no_tps' => 'required',
        ],$message);

        Saksi::create($validasi);
        return redirect('list-saksi')->with('Success', 'Data berhasil di simpan..!');
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saksi $saksi)
    {
        $saksi->delete();
        redirect('saksi');
    }
}