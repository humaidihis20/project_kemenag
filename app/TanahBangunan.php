<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TanahBangunan extends Model
{
    protected $table = 'ref_tanah_bangunan';
    protected $fillable = [
    	'lembaga_id','luas_tanah_total','luas_bangunan_total','luas_bangunan','luas_tempat_parkir','luas_lapangan','luas_kebun','luas_taman','luas_lahan_kosong','luas_lainnya',
    ];
}
