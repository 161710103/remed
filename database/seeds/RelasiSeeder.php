<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Jurusan;
use App\Matkul;
use App\Mahasiswa;
use App\Wali;
class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->delete();
		DB::table('jurusan')->delete();
		DB::table('matakuliah')->delete();
		DB::table('mahasiswa')->delete();
		DB::table('wali')->delete();


        //seeder dosen
		$a = Dosen::create(array(
			'nama' => 'Bu Ani',
			'nipd'  => '500001',
			'alamat' => 'Padjajaran'
			));


       //seeder jurusan
		$c= Jurusan::create(array(
			'nama_jurusan'  => 'perbankan'
		));		

       //seeder siswa

		 $diah = Mahasiswa::create(array(
            'nama'=>'diah setiawatie',
            'nis'=>'1234567',
            'id_dosen'=>$a->id,
            'id_jurusan'=>$c-> id));


		 $ara = Mahasiswa::create(array(
            'nama'=>'diandra aulia putri',
            'nis'=>'09765',
            'id_dosen'=>$a->id,
            'id_jurusan'=>$c-> id));


		 //seeder wali
		 Wali::create(array(
			'nama'  => 'agus setiawan',
			'alamat'  => 'Bandung',
			'id_mahasiswa' => $diah-> id));

		 $mtk = Matkul::create(array(
			'nama_matkul'=>'matematika',
			'kkm'=>'75'));

		  $diah->matakuliah()->attach($mtk-> id);
    }
}
