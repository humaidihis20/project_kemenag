<?php

use Illuminate\Database\Seeder;

class m_tahun_pelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_tahun_pelajaran')->insert([
        	'tahun_pelajaran' => '2014',
        	'semester' => '2',
        	'status_aktif' => '1',
        ]);
    }
}
