<?php

use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsi')->insert([
            'id' => '1',
            'provinsi_id' => '11',
            'nama_provinsi' => 'Aceh',
        ]);

        DB::table('provinsi')->insert([
           'id' => '2','provinsi_id' => '12','nama_provinsi' => 'Sumatera Utara'
        ]);

        DB::table('provinsi')->insert([
            'id' => '3','provinsi_id' => '13','nama_provinsi' => 'Sumatera Barat'
        ]);

        DB::table('provinsi')->insert([
            'id' => '4','provinsi_id' => '14','nama_provinsi' => 'Riau'
        ]);

        DB::table('provinsi')->insert([
            'id' => '5','provinsi_id' => '15','nama_provinsi' => 'Jambi'
        ]);

        DB::table('provinsi')->insert([
            'id' => '6','provinsi_id' => '16','nama_provinsi' => 'Sumatera Selatan'
        ]);

        DB::table('provinsi')->insert([
            'id' => '7','provinsi_id' => '17','nama_provinsi' => 'Bengkulu'
        ]);

        DB::table('provinsi')->insert([
            'id' => '8','provinsi_id' => '18','nama_provinsi' => 'Lampung'
        ]);

        DB::table('provinsi')->insert([
            'id' => '9','provinsi_id' => '21','nama_provinsi' => 'Kepulauan Riau'
        ]);

        DB::table('provinsi')->insert([
            'id' => '10','provinsi_id' => '19','nama_provinsi' => 'Bangka Belitung'
        ]);

        DB::table('provinsi')->insert([
            'id' => '11','provinsi_id' => '32','nama_provinsi' => 'Jawa Barat'
        ]);

        DB::table('provinsi')->insert([
            'id' => '12','provinsi_id' => '31','nama_provinsi' => 'DKI Jakarta'
        ]);

        DB::table('provinsi')->insert([
            'id' => '13','provinsi_id' => '33','nama_provinsi' => 'Jawa Tengah'
        ]);

        DB::table('provinsi')->insert([
            'id' => '14','provinsi_id' => '34','nama_provinsi' => 'DI Yogyakarta'
        ]);

        DB::table('provinsi')->insert([
            'id' => '15','provinsi_id' => '35','nama_provinsi' => 'Jawa Timur'
        ]);

        DB::table('provinsi')->insert([
            'id' => '16','provinsi_id' => '36','nama_provinsi' => 'Banten'
        ]);

        DB::table('provinsi')->insert([
            'id' => '17','provinsi_id' => '51','nama_provinsi' => 'Bali'
        ]);

        DB::table('provinsi')->insert([
            'id' => '18','provinsi_id' => '52','nama_provinsi' => 'Nusa Tenggara Barat'
        ]);

        DB::table('provinsi')->insert([
            'id' => '19','provinsi_id' => '53','nama_provinsi' => 'Nusa Tenggara Timur'
        ]);

        DB::table('provinsi')->insert([
            'id' => '20','provinsi_id' => '61','nama_provinsi' => 'Kalimantan Barat'
        ]);

        DB::table('provinsi')->insert([
            'id' => '21','provinsi_id' => '62','nama_provinsi' => 'Kalimantan Tengah'
        ]);

        DB::table('provinsi')->insert([
            'id' => '22','provinsi_id' => '63','nama_provinsi' => 'Kalimantan Selatan'
        ]);

        DB::table('provinsi')->insert([
            'id' => '23','provinsi_id' => '64','nama_provinsi' => 'Kalimantan Timur'
        ]);

        DB::table('provinsi')->insert([
            'id' => '24','provinsi_id' => '71','nama_provinsi' => 'Sulawesi Utara'
        ]);

        DB::table('provinsi')->insert([
            'id' => '25','provinsi_id' => '72','nama_provinsi' => 'Sulawesi Tengah'
        ]);

        DB::table('provinsi')->insert([
        'id' => '26','provinsi_id' => '65','nama_provinsi' => 'Kalimantan Utara'
        ]);

        DB::table('provinsi')->insert([
            'id' => '27','provinsi_id' => '73','nama_provinsi' => 'Sulawesi Selatan'
        ]);

        DB::table('provinsi')->insert([
            'id' => '28','provinsi_id' => '74','nama_provinsi' => 'Sulawesi Tenggara'
        ]);

        DB::table('provinsi')->insert([
            'id' => '29','provinsi_id' => '75','nama_provinsi' => 'Gorontalo'
        ]);

        DB::table('provinsi')->insert([
            'id' => '30','provinsi_id' => '76','nama_provinsi' => 'Sulawesi Barat'
        ]);

        DB::table('provinsi')->insert([
            'id' => '31','provinsi_id' => '81','nama_provinsi' => 'Maluku'
        ]);

        DB::table('provinsi')->insert([
            'id' => '32','provinsi_id' => '82','nama_provinsi' => 'Maluku Utara'
        ]);

        DB::table('provinsi')->insert([
           'id' => '33','provinsi_id' => '91','nama_provinsi' => 'Papua'
        ]);

        DB::table('provinsi')->insert([
            'id' => '34','provinsi_id' => '92','nama_provinsi' => 'Papua Barat'
        ]);
    }
}
