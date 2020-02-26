<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenaga extends Model
{
    //
    protected $table = 'm_tenaga_kependidikan';
    protected $fillable = [
        'lembaga_id', 'gelar_depan', 'gelar_belakang' , 'nama_lengkap','nomor_nik', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'tmt', 'status_pegawai', 'provinsi_id', 'kabupaten_id', 'kecamatan_id', 'kelurahan_id', 'alamat', 'no_hp', 'email', 'jabatan',
    ];
}
