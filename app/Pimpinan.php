<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pimpinan extends Model
{
    protected $table = 'm_riwayat_pimpinan';
    protected $fillable = [
    	'lembaga_id','nama_pimpinan','jabatan','periode_awal','periode_akhir','status',
    ];
}
