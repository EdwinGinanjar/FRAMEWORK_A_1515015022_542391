<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Dosen;
use App\pengguna;
use Input;

class DosenController extends Controller
{
//     public function awal()
//     {
//     	return "Hello dari DosenController";
//     }
//     public function tambah()
//     {
//     	return $this->simpan();
//     }
//     public function simpan()
//     {
//     	$dosen = new Dosen();
//     	$dosen->nama = 'Edwin Ginanjar';
//     	$dosen->nip = '5423914000';
//     	$dosen->alamat = 'Jl. Perjuangan 9';
//     	$dosen->pengguna_id = '1';
//     	$dosen->save();
//     	return "Data dengan dosen {$dosen->nama} telah disimpan";
//     }
// }

    protected $informasi='Gagal aksi';
    public function awal ()
    {
        
      $semuaDosen= Dosen::all();
      return view('dosen.awal',compact('semuaDosen'));
    }
    public function tambah()
   {
      
      return view('dosen.tambah');
   }
   public function simpan(Request $input)
   {
    $pengguna = new pengguna($input->only('username','password'));
    if($pengguna->save()){
        $dosen = new Dosen();
        $dosen->nama = $input->nama;
        $dosen->nip = $input->nip;
        $dosen->alamat = $input->alamat;
        if($pengguna->dosen()->save($dosen)) $this->informasi = 'Berhasil simpan data'; 
      }
      return redirect ('dosen') ->with (['Informasi'=>$this->informasi]);
   }
    public function edit($id)
   {
    $dosen = Dosen::find($id);
      return view('dosen.edit')->with (array('dosen'=>$dosen));
   }
   public function lihat($id)
   {
    $dosen = Dosen::find($id);
      return view('dosen.lihat')->with(array('dosen'=>$dosen));
    }
   public function update($id,Request $input)
   {
    $dosen = Dosen::find($id);
    $pengguna = $dosen->pengguna;
    $dosen->nama = $input->nama;
    $dosen->nip = $input->nip;
    $dosen->alamat = $input->alamat;
    $dosen->save();
    if (!is_null($input->username)){
      $pengguna->fill($input->only('username'));
      if (!empty($input->password)) {
         $pengguna->password = $input->password;
      }
      if ($pengguna->save()) {
         $this->informasi = 'Berhasil Simpan Data';
      }else {
         $this->informasi = 'Gagal Simpan Data';
      }
    }

    
      return redirect ('dosen') ->with (['Informasi'=>$this->informasi]);
   }
   
   public function hapus($id)
   {
    $dosen = Dosen::find($id);
    if ($dosen->pengguna()->delete()) {
        if ($dosen->delete()) {
            $this->informasi = 'Berhasil Hapus Data';
        }
    }
      return redirect ('dosen') ->with (['Informasi'=>$this->informasi]);
   }
}
