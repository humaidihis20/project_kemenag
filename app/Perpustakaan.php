<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    //
    protected $table = 'ref_perpustakaan';
    protected $fillable = [
        'lembaga_id','deskripsi','jumlah_baik','jumlah_rusak_ringan','jumlah_rusak_berat',
    ];
}
