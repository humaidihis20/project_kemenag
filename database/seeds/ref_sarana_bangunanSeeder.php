<?php

use Illuminate\Database\Seeder;

class ref_sarana_bangunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_sarana_bangunan')->insert([
        	'lembaga_id' => '2',
        	'jenis_bangunan_id' => '23',
        	'jumlah' => '3',
        	'luas' => '20.4',
        	'jumlah_baik' => '2',
        	'jumlah_rusak_ringan' => '1',
        	'jumlah_rusak_berat' => '2',
        ]);
    }
}
