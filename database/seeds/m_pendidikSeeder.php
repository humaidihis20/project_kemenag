<?php

use Illuminate\Database\Seeder;

class m_pendidikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_pendidik')->insert([
        	'lembaga_id' => '2',
        	'gelar_depan' => 'Drs',
        	'gelar_belakang' => 'M.SI',
        	'nama_lengkap' => 'Budi Utomo',
        	'jenis_kelamin' => 'laki-laki',
        	'tempat_lahir' => 'Jakarta',
        	'tanggal_lahir' => '2020-12-31 23:59:59',
        	'tmt' => '2020-12-31 23:59:59',
        	'status_pegawai' => 'tetap',
        	'provinsi_id' => '2',
        	'kabupaten_id' => '4',
        	'kecamatan_id' => '6',
        	'kelurahan_id' => '8',
        	'alamat' => 'Jl. Sawo 2 no. 4',
        	'no_hp' => '089789878768',
        	'email' => 'utomo@gmail.com',
        	'mata_pelajaran_diampu' => 'Sosiologi',
        ]);
    }
}
