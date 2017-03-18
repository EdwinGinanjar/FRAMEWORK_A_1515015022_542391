<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ruangan;

class RuanganControler extends Controller
{
    public function awal()
    {
    	return "Hello dari RuanganControler";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$ruangan = new ruangan();
    	$ruangan->tittle = '407';
    	$ruangan->save();
    	return "Data dengan Username {$ruangan->tittle} telah disimpan";
    }
}
