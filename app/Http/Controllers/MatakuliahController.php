<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\matakuliah;
use App\pengguna;

class MatakuliahController extends Controller
{
    public function awal()
    {
    return view('matakuliah.awal',['data'=>matakuliah::all()]);
    }
    public function tambah()
   {
      return view('matakuliah.tambah');
   }
   public function simpan(Request $input)
   {
    $matakuliah = new matakuliah();
    $matakuliah->tittle = $input->tittle;
    $matakuliah->keterangan = $input->keterangan;
    $informasi = $matakuliah->save()? 'Berhasil simpan data': 'Gagal Simpan Data';
      return redirect ('matakuliah') ->with (['informasi'=>$informasi]);
   }
   public function edit($id)
   {
    $matakuliah = matakuliah::find($id);
      return view('matakuliah.edit')->with (array('matakuliah'=>$matakuliah));
   }
   public function lihat($id)
   {
    $matakuliah = matakuliah::find($id);
      return view('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
    }
   public function update($id,Request $input)
   {
    $matakuliah = matakuliah::find($id);
    $matakuliah->tittle = $input->tittle;
    $matakuliah->keterangan = $input->keterangan;
    $informasi = $matakuliah->save()? 'Berhasil update data': 'Gagal update Data';
      return redirect ('matakuliah') ->with (['informasi'=>$informasi]);
   }
   public function hapus($id)
   {
    $matakuliah = matakuliah::find($id);
    $informasi = $matakuliah->delete()? 'Berhasil hapus data':'Gagal hapus Data';
      return redirect ('matakuliah') ->with (['informasi'=>$informasi]);
   }
}

