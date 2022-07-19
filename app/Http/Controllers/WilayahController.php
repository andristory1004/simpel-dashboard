<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WilayahController extends Controller
{
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
}