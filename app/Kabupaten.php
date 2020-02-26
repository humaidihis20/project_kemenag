<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    //
    protected $table = 'kabupaten';
    protected $fillable = [
        'id','kabupaten_id','nama_kabupaten','provinsi_id'
    ];
}
