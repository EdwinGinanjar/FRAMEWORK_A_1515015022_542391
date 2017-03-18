<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});
// Route::get('/Edwin', function () {
// 	return view('Edwin');
// });

// Route::get('pengguna/{pengguna}',function($pengguna)
// {
// 	return "Hallo World dari pengguna $pengguna";
// });
// Route::get('berita/{berita?}',function($berita = "Laravel 5")
// {
// 	return "berita $berita belum di baca";
// });
Route::get('pengguna','penggunacontroller@awal');

Route::get('pengguna/tambah','penggunacontroller@tambah');

Route::get('ruangan','RuanganControler@awal');

Route::get('ruangan/tambah','RuanganControler@tambah');

Route::get('matakuliah','MatakuliahController@awal');

Route::get('matakuliah/tambah','MatakuliahController@tambah');

Route::get('dosen','DosenController@awal');

Route::get('dosen/tambah','DosenController@tambah');

Route::get('mahasiswa','MahasiswaController@awal');

Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');

Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');

Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');

Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');




