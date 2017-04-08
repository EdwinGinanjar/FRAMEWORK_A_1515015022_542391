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
// Route::get('pengguna','penggunacontroller@awal');

// Route::get('pengguna/tambah','penggunacontroller@tambah');

// Route::get('ruangan','RuanganControler@awal');

// Route::get('ruangan/tambah','RuanganControler@tambah');

// Route::get('matakuliah','MatakuliahController@awal');

// Route::get('matakuliah/tambah','MatakuliahController@tambah');

// Route::get('dosen','DosenController@awal');

// Route::get('dosen/tambah','DosenController@tambah');

// Route::get('mahasiswa','MahasiswaController@awal');

// Route::get('mahasiswa/tambah','MahasiswaController@tambah');

// Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');

// Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');

// Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');

// Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');

Route::get('pengguna','penggunacontroller@awal');
Route::get('pengguna/tambah','penggunacontroller@tambah');
Route::post('pengguna/simpan','penggunacontroller@simpan');
Route::get('pengguna/edit/{pengguna}','penggunacontroller@edit');
Route::post('pengguna/edit/{pengguna}','penggunacontroller@update');
Route::get('pengguna/hapus/{pengguna}','penggunacontroller@hapus');
Route::get('pengguna/lihat/{pengguna}','penggunacontroller@lihat');

Route::get('ruangan','RuanganControler@awal');
Route::get('ruangan/tambah','RuanganControler@tambah');
Route::post('ruangan/simpan','RuanganControler@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganControler@edit');
Route::post('ruangan/edit/{ruangan}','RuanganControler@update');
Route::get('ruangan/hapus/{ruangan}','RuanganControler@hapus');
Route::get('ruangan/lihat/{ruangan}','RuanganControler@lihat');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');
Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');

Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('dosen/{dosen}','DosenController@lihat');
Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');
Route::get('dosen/lihat/{dosen}','DosenController@lihat');


Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('mahasiswa/{mahasiswa}','MahasiswaController@lihat');
Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');
Route::get('mahasiswa/lihat/{mahasiswa}','MahasiswaController@lihat');

Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');
Route::get('dosen_matakuliah/{dosen_matakuliah}','Dosen_MatakuliahController@lihat');
Route::post('dosen_matakuliah/simpan','Dosen_MatakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','Dosen_MatakuliahController@hapus');
Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','Dosen_MatakuliahController@hapus');

Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');
Route::get('jadwal_matakuliah/{jadwal_matakuliah}','Jadwal_MatakuliahController@lihat');
Route::post('jadwal_matakuliah/simpan','Jadwal_MatakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','Jadwal_MatakuliahController@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','Jadwal_MatakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','Jadwal_MatakuliahController@hapus');
Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}','Jadwal_MatakuliahController@lihat');








