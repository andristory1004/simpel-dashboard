<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use Illuminate\Http\Request;

class PaslonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.paslon');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.input-paslon');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama_ketua' => 'required',
            'nama_wakil' => 'required',
            'no_urut' => 'required',
            'image' => 'image|file|max:2048',
        ]);

        // $fileName = time().$request->file('image')->getClientOriginalName();
        // $path = $request->file('image')->store('images/paslon');
        // $validasi['image']=$path;
        if($request->file('image')){
            $validasi['image'] = $request->file('image')->store('images/paslon');
        }
        Paslon::create($validasi);

        return redirect('paslon');
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
    public function destroy($id)
    {
        //
    }
}