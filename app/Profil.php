<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'm_lembaga';
    protected $fillable = [
    	'nama_lembaga','nama_pj_lembaga','hp','phone','provinsi_id','kabupaten_id','kecamatan_id','kelurahan_id','alamat','email','jenis_pendidikan','jenis_lembaga','status_lembaga','tanggal_berdiri','path_akta_notaris','path_ad_art',
    ];
}
