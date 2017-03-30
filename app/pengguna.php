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
    }
    public function dosen()
    {
    	return $this->hasOne(Dosen::class);
    }
    // public function Peran()
    // {
    // 	return $this->belongsTo(Peran::class);
    // }
}

