<?php

namespace App\Http\Controllers;

use App\Pendidik;
use App\Provinsi;
use Illuminate\Http\Request;

class PendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $form = Pendidik::orderBy('id','DESC')->get();
        // return view('form.tambah_dipendidik', compact('form'));
        $form = Pendidik::all();
        return view('form.tambah_pendidik', compact('form'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = Provinsi::all();
        return view('form.create_pendidik', compact('provinsi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pendidik::create([

            'lembaga_id' => '2',
            'gelar_depan' => 'drs',
            'gelar_belakang' => 'm.si',
            'nama_lengkap' => $request->nama_lengkap,
            'nomor_nik' => $request->nomor_nik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tmt' => $request->tmt,
            'status_pegawai' => $request->status_pegawai,
            'provinsi_id' => $request->provinsi_id,
            'kabupaten_id' => $request->kabupaten_id,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $request->kelurahan_id,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'mata_pelajaran_diampu' => $request->mata_pelajaran_diampu
            
        ]);
        return redirect('/form/tambah_pendidik');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function show(Pendidik $pendidik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $form = Pendidik::find($id);
        return view('/form/edit_pendidik', ['form' => $form]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pendidik  $pendidik
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
            'status_pegawai' => 'required'
         ]);
      
         $form = Pendidik::find($id);
         $form->nama_lengkap = $request->nama_lengkap;
         $form->nomor_nik = $request->nomor_nik;
         $form->jenis_kelamin = $request->jenis_kelamin;
         $form->tanggal_lahir = $request->tanggal_lahir;
         $form->status_pegawai = $request->status_pegawai;
         $form->save();
         return redirect('/form/tambah_pendidik');
    }

    public function hapus($id)
    {
        $form = Pendidik::find($id);
        $form->delete();
        return redirect('/form/tambah_pendidik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendidik $pendidik)
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
