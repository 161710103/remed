<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
     protected $table = 'mahasiswa';

	protected $fillable = array('nama', 'kelas', 'nis', 'id_dosen', 'id_jurusan');

	public function dosen() {
		return $this->belongsTo('App\Dosen', 'id_dosen');
	}
	public function jurusan() {
		return $this->belongsTo('App\Jurusan', 'id_jurusan');
	}
	public function matakuliah() {
		return $this->belongsToMany('App\Matkul', 'matkulsiswa', 'id_mahasiswa', 'id_matkul');
	}
	public function wali() {
		return $this->belongsTo('App\Wali', 'id_mahasiswa');
	}
}
