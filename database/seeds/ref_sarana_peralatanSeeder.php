<?php

use Illuminate\Database\Seeder;

class ref_sarana_peralatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_sarana_peralatan')->insert([
        	'lembaga_id' => '2',
        	'jenis_peralatan_id' => '2',
        	'jumlah' => '2',
        	'jumlah_baik' => '1',
        	'jumlah_rusak_ringan' => '1',
        	'jumlah_rusak_berat' => '2',
        ]);
    }
}
