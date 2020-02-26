<?php

use Illuminate\Database\Seeder;

class ref_tanah_bangunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_tanah_bangunan')->insert([
        	'lembaga_id' => '12',
        	'luas_tanah_total' => '123.4',
        	'luas_bangunan_total' => '12.3',
        	'luas_bangunan' => '1.32',
        	'luas_tempat_parkir' => '32.4',
        	'luas_lapangan' => '12.3',
        	'luas_kebun' => '22.3',
        	'luas_taman' => '23.3',
        	'luas_lahan_kosong' => '33.3',
        	'luas_lainnya' => '12.2',
        ]);
    }
}
