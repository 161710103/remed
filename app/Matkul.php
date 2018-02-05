<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    
    protected $table = 'matakuliah';

	protected $fillable = array('nama_matkul', 'kkm');

	public function mahasiswa() {
		return $this->belongsToMany('App\Mahasiswa', 'matkulsiswa', 'id_mahasiswa', 'id_matakuliah');
	}
}


