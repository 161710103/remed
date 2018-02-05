<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';

	protected $fillable = array('nama_jurusan');

	public function kelas() {
		return $this->hasMany('App\Mahasiswa', 'id_jurusan');
	}
}
