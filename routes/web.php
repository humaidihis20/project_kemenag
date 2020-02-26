<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('alumni',function(){
	return view('/form/alumni');
});

Route::get('alumni','AlumniController@index');
Route::get('tambahalumni','AlumniController@create');
Route::post('tambahalumni','AlumniController@store');
Route::delete('alumni/{id}','AlumniController@destroy');

Route::get('fotolembaga','ProfilController@show');

Route::get('saranabangunan',function(){
	return view('/form/sarana_bangunan');
});

Route::get('saranaperalatan',function(){
	return view('/form/sarana_peralatan');
});

Route::get('perpustakaan','PerpustakaanController@index');
Route::post('perpuscreate','PerpustakaanController@store');

Route::get('profil','ProfilController@index');
Route::get('getKabupaten/{request}','ProfilController@getKabupaten');
Route::get('/profil/getKecamatan/{request}','ProfilController@getKecamatan');
Route::get('/profil/getKelurahan/{request}','ProfilController@getKelurahan');
Route::post('profil','ProfilController@store');

Route::get('tanahbangunan','TanahBangunanController@index');
Route::post('tanahbangunan','TanahBangunanController@store');

Route::get('pimpinan','PimpinanController@index');
Route::get('pimpinan/{id}','PimpinanController@show');
Route::post('pimpinancreate','PimpinanController@store');
Route::delete('pimpinandelete/{id}','PimpinanController@destroy');

Route::get('/form/tambah_pendidik', 'PendidikController@index');
Route::get('/form/create_pendidik', 'PendidikController@create');
Route::post('/form/tambah_pendidik', 'PendidikController@store');
Route::get('/form/edit/{id}', 'PendidikController@edit');
Route::put('/form/update/{id}', 'PendidikController@update');
Route::get('/form/hapus/{id}', 'PendidikController@hapus');

Route::get('/pendidik/tambah_dipendidik', 'TenagaPendidikController@index');
Route::get('/pendidik/tenaga_pendidik', 'TenagaPendidikController@create');
Route::post('/pendidik/tambah_dipendidik', 'TenagaPendidikController@store');
Route::get('/pendidik/edit/{id}', 'TenagaPendidikController@edit');
Route::put('/pendidik/update/{id}', 'TenagaPendidikController@update');
Route::get('/pendidik/hapus/{id}', 'TenagaPendidikController@hapus');

Route::get('/siswa/tambah_datasiswa', 'SiswaController@index');
Route::get('/siswa/data_siswa', 'SiswaController@create');
Route::post('/siswa/tambah_datasiswa', 'SiswaController@store');
Route::get('/siswa/edit/{id}', 'SiswaController@edit');
Route::put('/siswa/update/{id}', 'SiswaController@update');
Route::get('/siswa/hapus/{id}', 'SiswaController@hapus');


