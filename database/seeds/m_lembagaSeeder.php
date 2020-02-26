<?php

use Illuminate\Database\Seeder;

class m_lembagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_lembaga')->insert([
        	'nama_lembaga' => 'Kantor Agama',
        	'nama_pj_lembaga' => 'Budi Santoso',
        	'hp' => '085891918282',
        	'phone' => '02175818345',
        	'provinsi_id' => '3',
        	'kabupaten_id' => '2',
        	'kecamatan_id' => '2',
        	'kelurahan_id' => '2',
        	'alamat' => 'Jl. DBN 2 Ujung no. 3',
        	'email' => 'budi@gmail.com',
        	'jenis_pendidikan' => 'Strata 1',
        	'jenis_lembaga' => 'Keagamaan',
        	'status_lembaga' => '----',
        	'tanggal_berdiri' => '2020-12-31 23:59:59',
        	'path_akta_notaris' => Str::random(10),
        	'path_ad_art' => Str::random(10)
        ]);
    }
}
