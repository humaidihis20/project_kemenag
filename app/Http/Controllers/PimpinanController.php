<?php

namespace App\Http\Controllers;

use App\Pimpinan;
use Illuminate\Http\Request;

class PimpinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pimpinan = Pimpinan::all();
        return view('form.daftar_pimpinan',compact('pimpinan'));
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
        if ($request->id == null) {
            Pimpinan::create([
            'lembaga_id'=> '9',
            'nama_pimpinan'=> $request->nama_pimpinan,
            'jabatan' => $request->jabatan,
            'periode_awal' => $request->periode_awal,
            'periode_akhir' => $request->periode_akhir,
            'status' => $request->status,
        ]);
        }else{
            Pimpinan::where('id','=',$request->id)->update([
            'lembaga_id'=> '9',
            'nama_pimpinan'=> $request->nama_pimpinan,
            'jabatan' => $request->jabatan,
            'periode_awal' => $request->periode_awal,
            'periode_akhir' => $request->periode_akhir,
            'status' => $request->status,
            ]);
        }
        
        return response()->json(['success'=>'Data Saved Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pimpinan  $pimpinan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $where = array('id' => $id);
        $pimpinan = Pimpinan::where($where)->first();

        return response()->json($pimpinan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pimpinan  $pimpinan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pimpinan $pimpinan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pimpinan  $pimpinan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pimpinan $pimpinan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pimpinan  $pimpinan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pimpinan $pimpinan, Request $request)
    {
        Pimpinan::where('id',$request->id)->delete();
        return response()->json(['success'=>'Account deleted successfully.']);
    }
}
