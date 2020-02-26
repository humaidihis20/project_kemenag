<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'm_siswa';
    protected $fillable = [
        'lembaga_id', 'nama_lengkap','nomor_nik', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'provinsi_id', 'kabupaten_id', 'kecamatan_id', 'kelurahan_id', 'alamat', 'no_hp', 'email', 'tanggal_masuk', 'nama_ibu', 'nama_bapak'
    ];
}
