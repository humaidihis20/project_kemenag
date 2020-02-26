<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    //
    protected $table = 'm_alumni';
    protected $fillable = [
        'lembaga_id','nama_lengkap','jenis_kelamin','tempat_lahir','tanggal_lahir','provinsi_id','kabupaten_id','kecamatan_id','kelurahan_id','alamat','no_hp','email','tanggal_masuk','nama_ibu','nama_bapak','tanggal_lulus','nomor_sertifikat',
    ];
}
