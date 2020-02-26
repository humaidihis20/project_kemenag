<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Provinsi;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.tambah_datasiswa', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = Provinsi::all();
        return view('siswa.data_siswa', compact('provinsi'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Siswa::create([

            'lembaga_id' => '2',
            'nama_lengkap' => $request->nama_lengkap,
            'nomor_nik' => $request->nomor_nik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'provinsi_id' => $request->provinsi_id,
            'kabupaten_id' => $request->kabupaten_id,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $request->kelurahan_id,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'tanggal_masuk' => $request->tanggal_masuk,
            'nama_ibu' => $request->nama_ibu,
            'nama_bapak' => $request->nama_bapak,
            ]);
            return redirect('/siswa/tambah_datasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $siswa = Siswa::find($id);
        return view('/siswa/edit_siswa', ['siswa' => $siswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //
        $this->validate($request,[
            'nama_lengkap' => 'required',
            'nomor_nik' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required'
         ]);
      
         $siswa = Siswa::find($id);
         $siswa->nama_lengkap = $request->nama_lengkap;
         $siswa->nomor_nik = $request->nomor_nik;
         $siswa->jenis_kelamin = $request->jenis_kelamin;
         $siswa->tanggal_lahir = $request->tanggal_lahir;
         $siswa->alamat = $request->alamat;
         $siswa->save();
         return redirect('/siswa/tambah_datasiswa');
    }

    public function hapus($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa/tambah_datasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
    public function getKabupaten($request)
        {
            $kabupaten = Kabupaten::where('provinsi_id','=',$request)->get();
            $return = '<option value=""></option>';
            foreach ($kabupaten as $row) {
            $return .= "<option value='$row->kabupaten_id'>$row->nama_kabupaten</option>";
            }
            return Response::json($return);
    }

        public function getKecamatan($request)
        {
            $kecamatan = Kecamatan::where('kabupaten_id','=',$request)->get();

            $return = '<option value=""></option>';
            foreach ($kecamatan as $row) {
            $return .= "<option value='$row->kecamatan_id'>$row->nama_kecamatan</option>";
            }
            return Response::json($return);
    }

        public function getKelurahan($request)
        {
            $kelurahan = Kelurahan::where('kecamatan_id','=',$request)->get();

            $return = '<option value=""></option>';
            foreach ($kelurahan as $row) {
            $return .= "<option value='$row->id'>$row->nama_kelurahan</option>";
            }
            return Response::json($return);
    }
}
