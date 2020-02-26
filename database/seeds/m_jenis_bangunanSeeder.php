<?php

use Illuminate\Database\Seeder;

class m_jenis_bangunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_jenis_bangunan')->insert([
        	'jenis_bangunan' => 'Sekolah',
        ]);

        DB::table('m_jenis_bangunan')->insert([
        	'jenis_bangunan' => 'Kantin',
        ]);

        DB::table('m_jenis_bangunan')->insert([
        	'jenis_bangunan' => 'Gardu',
        ]);
    }
}
