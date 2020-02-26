<?php

use Illuminate\Database\Seeder;

class m_jenis_peralatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_jenis_peralatan')->insert([
        	'jenis_peralatan' => 'Sapu',
        ]);

        DB::table('m_jenis_peralatan')->insert([
        	'jenis_peralatan' => 'Ember',
        ]);

        DB::table('m_jenis_peralatan')->insert([
        	'jenis_peralatan' => 'Tong sampah',
        ]);
    }
}
