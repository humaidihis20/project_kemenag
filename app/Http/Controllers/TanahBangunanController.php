<?php

namespace App\Http\Controllers;

use App\TanahBangunan;
use Illuminate\Http\Request;

class TanahBangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.tanah_bangunan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'luas_tanah_total' => 'required|numeric',
            'luas_bangunan_total' => 'required|numeric',
            'luas_bangunan' => 'required|numeric',
            'luas_tempat_parkir' => 'required|numeric',
            'luas_lapangan' => 'required|numeric',
            'luas_kebun' => 'required|numeric',
            'luas_taman' => 'required|numeric',
            'luas_lahan_kosong' => 'required|numeric',
            'luas_lainnya' => 'required|numeric',
        ]);

        TanahBangunan::create($request->all());
        return redirect('tanahbangunan')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TanahBangunan  $tanahBangunan
     * @return \Illuminate\Http\Response
     */
    public function show(TanahBangunan $tanahBangunan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TanahBangunan  $tanahBangunan
     * @return \Illuminate\Http\Response
     */
    public function edit(TanahBangunan $tanahBangunan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TanahBangunan  $tanahBangunan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TanahBangunan $tanahBangunan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TanahBangunan  $tanahBangunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TanahBangunan $tanahBangunan)
    {
        //
    }
}
