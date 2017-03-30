<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table = 'ruangan';
    protected $fillable = ['tittle'];

    public function jadwal_matakuliah(){
    	return $this->hasMany(Jadwal_Matakuliah::class);
    }
}
