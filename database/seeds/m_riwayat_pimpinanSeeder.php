<?php

use Illuminate\Database\Seeder;

class m_riwayat_pimpinanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_riwayat_pimpinan')->insert([
        	'lembaga_id' => '2',
        	'nama_pimpinan' => 'Hisam',
        	'jabatan' => 'Ketua Umum',
        	'periode_awal' => '2020-12-31 23:59:59',
        	'periode_akhir' => '2020-12-31 23:59:59',
        	'status' => '1',
        ]);
    }
}
