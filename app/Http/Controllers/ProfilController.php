<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;
use App\Kabupaten;
use App\Kecamatan;
use App\Kelurahan;
use App\Profil;
use Response;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinsi = Provinsi::all();
        return view('form.profil', compact('provinsi'));
    }

    public function getKabupaten($request){
        $kabupaten = Kabupaten::where('provinsi_id','=',$request)->get();
        $return = '<option value="">Pilih Kabupaten</option>';
        foreach ($kabupaten as $row) {
        $return .= "<option value='$row->kabupaten_id'>$row->nama_kabupaten</option>";
        }
        return Response::json($return);
    }

    public function getKecamatan($request){
        $kecamatan = Kecamatan::where('kabupaten_id','=',$request)->get();

        $return = '<option value="">Pilih Kecamatan</option>';
        foreach ($kecamatan as $row) {
        $return .= "<option value='$row->kecamatan_id'>$row->nama_kecamatan</option>";
        }
        return Response::json($return);
    }

    public function getKelurahan($request){
        $kelurahan = Kelurahan::where('kecamatan_id','=',$request)->get();

        $return = '<option value="">Pilih Kelurahan</option>';
        foreach ($kelurahan as $row) {
        $return .= "<option value='$row->id'>$row->nama_kelurahan</option>";
        }
        return Response::json($return);
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
        $file = $request->file('akte_notaris');
                // nama file
        $nama_file = $file->getClientOriginalName();
        $file2 = $request->file('ad_art');
        $nama_file2 = $file2->getClientOriginalName();
        $file2->move(public_path('images'),$nama_file2);
        $file->move(public_path('images'),$nama_file);

        $profil = Profil::create([
            'lembaga_id'=> '1',
            'nama_lembaga'=>'Kantor',
            'nama_pj_lembaga'=>$request->nama_lembaga,
            'hp'=>'085678894856',
            'phone'=>'02175818524',
            'provinsi_id'=>$request->provinsi,
            'kabupaten_id'=>$request->kabupaten,
            'kecamatan_id'=>$request->kecamatan,
            'kelurahan_id'=>$request->kelurahan,
            'alamat'=>$request->alamat,
            'email'=>'alwi.alddddd@gmail.com',
            'jenis_pendidikan'=>$request->jenis_pendidikan,
            'jenis_lembaga'=>$request->jenis_lembaga,
            'status_lembaga'=>$request->status_lembaga,
            'tanggal_berdiri'=>$request->tgl_berdiri,
            'path_akta_notaris'=>$nama_file,
            'path_ad_art'=>$nama_file2,
        ]);
        $provinsi = Provinsi::all();
        return redirect('profil')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $foto = Profil::all();
        return view('form/foto_lembaga',compact('foto'));
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
