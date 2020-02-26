<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'email' => 'hisam@gmail.com',
        	'password' => Str::random(10),
        	'remember_token' => Str::random(10),
        	'level' => 'admin',
        	'status_aktivasi' => '1',
        	'lembaga_id' => '12',
        	'provinsi_id' => '1',
        	'kabupaten_id' => '2',
        ]);
    }
}
