<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    //
    protected $table = 'kecamatan';
    protected $fillable = [
        'id','kecamatan_id','nama_kecamatan','kabupaten_id'
    ];
}
