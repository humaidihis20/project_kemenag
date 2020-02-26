<?php

use Illuminate\Database\Seeder;

class m_siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_siswa')->insert([
        	'lembaga_id' => '1',
            'nama_lengkap' => 'Hisam Humaidi',
            'jenis_kelamin' => 'laki-laki',
            'tempat_lahir' => 'DKI Jakarta',
            'tanggal_lahir' => '2020-12-31 23:59:59',
            'provinsi_id' => '31',
            'kabupaten_id' => '2',
            'kecamatan_id' => '2',
            'kelurahan_id' => '2',
            'alamat' => 'Jl. Cijantung 1 No. 1',
            'no_hp' => '087698766789',
            'email' => 'hisammaidi@gmail.com',
            'tanggal_masuk' => '2020-12-31 23:59:59',
            'nama_ibu' => 'Marsinah',
            'nama_bapak' => 'Marco',
        ]);
    }
}
