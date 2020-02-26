<?php

use Illuminate\Database\Seeder;

class ref_perpustakaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_perpustakaan')->insert([
        	'lembaga_id' => '3',
        	'deskripsi' => 'anonim',
        	'jumlah_baik' => '23',
        	'jumlah_rusak_ringan' => '22',
        	'jumlah_rusak_berat' => '12',
        ]);
    }
}
