<?php

namespace App\Http\Controllers;

use App\Alumni;
use Illuminate\Http\Request;
use App\Provinsi;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Alumni $alumni)
    {
        //
        $alumni = Alumni::all();
        return view('form.alumni',compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $provinsi = Provinsi::all();
        return view('form.tambah_data_alumni',compact('provinsi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'provinsi' => 'required|numeric',
            'kabupaten' => 'required|numeric',
            'kecamatan' => 'required|numeric',
            'kelurahan' => 'required|numeric',
            'alamat' => 'required',
            'nohp' => 'required|numeric',
            'email' => 'required|email:rfc,dns',
            'tgl_masuk' => 'required|date',
            'namaibu' => 'required',
            'namabapak' => 'required',
            'tgl_lulus' => 'required|date',
            'nomor_sertifikat' => 'required|numeric'
        ]);

        $alumni = Alumni::create([
            'lembaga_id' => '1',
            'nama_lengkap' => $request['nama_lengkap'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'tempat_lahir' => $request['tempat_lahir'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'provinsi_id' => $request['provinsi'],
            'kabupaten_id' => $request['kabupaten'],
            'kecamatan_id' => $request['kecamatan'],
            'kelurahan_id' => $request['kelurahan'],
            'alamat' => $request['alamat'],
            'no_hp' => '0'.$request['nohp'],
            'email' => $request['email'],
            'tanggal_masuk' => $request['tgl_masuk'],
            'nama_ibu' => $request['namaibu'],
            'nama_bapak' => $request['namabapak'],
            'tanggal_lulus' => $request['tgl_lulus'],
            'nomor_sertifikat' => $request['nomor_sertifikat'],
        ]);
        return redirect('alumni')->with('status', 'Data alumni berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni $alumni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni,Request $request)
    {
        //
        Alumni::where('id',$request->id)->delete();
        return redirect('alumni')->with('status', 'Data mahasiswa berhasil dihapus');
    }
}
