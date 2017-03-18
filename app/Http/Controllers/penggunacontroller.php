<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengguna;

class penggunacontroller extends Controller
{
	public function awal()
	{
		return "Hello dari penggunacontroller";
	}
public function tambah()
{
	return $this->simpan();
}
public function simpan() {
	$pengguna = new pengguna();
	$pengguna->username ='Edwin';
	$pengguna->password ='12345';
	$pengguna->save();
	return "Data dengan username {$pengguna->username} telah disimpan";
}
}
