<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];

    public function mahasiswa()
    {
    	return $this->hasOne(Mahasiswa::class);
        $mahasiswa=Pengguna::find(1)->mahasiswa;
        
    }
    public function dosen()
    {
    	return $this->hasOne(Dosen::class);
    }
   
}

