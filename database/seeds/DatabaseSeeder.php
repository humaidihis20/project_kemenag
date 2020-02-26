<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProvinsiSeeder::class,
        	KabupatenSeeder::class,
        	KecamatanSeeder::class,
        	KelurahanSeeder::class,
            Kelurahan2Seeder::class,
            Kelurahan3Seeder::class,
            Kelurahan4Seeder::class,
            Kelurahan5Seeder::class,
            Kelurahan6Seeder::class,
            Kelurahan7Seeder::class,
            Kelurahan8Seeder::class,
            Kelurahan9Seeder::class,
            Kelurahan10Seeder::class,
        	m_alumniSeeder::class,
            m_jenis_bangunanSeeder::class,
            m_jenis_peralatanSeeder::class,
            m_lembagaSeeder::class,
            m_pendidikSeeder::class,
            m_riwayat_pimpinanSeeder::class,
            m_siswaSeeder::class,
            m_tahun_pelajaranSeeder::class,
            m_tenaga_kependidikanSeeder::class,
            ref_perpustakaanSeeder::class,
            ref_sarana_bangunanSeeder::class,
            ref_sarana_peralatanSeeder::class,
            ref_tanah_bangunanSeeder::class,
            UsersSeeder::class,
        ]);
    }
}
