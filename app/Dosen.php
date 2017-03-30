<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];

    public function pengguna()
    {
    	return $this->belongsTo(pengguna::class);
    }
    public function Dosen_Matakuliah()
    {
    	return $this->hasMany(Dosen_Matakuliah::class);
        // $dosen_mengajar = App\Dosen::find(1)->dosen_matakuliah;
        // foreach ($dosen_mengajar as $mengajar){
        //     # code . . 
        // }

    }
}
