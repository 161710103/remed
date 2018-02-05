<?php
use App\Dosen;
use App\Jurusan;
use App\Matkul;
use App\Mahasiswa;
use App\Wali;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('soal1', function(){
	$first = Dosen::where('nama','=','Bu ani')->first();
	echo 'Nama Dosen : ', '<b>' .$first->nama.'</b>','<br>';
	echo 'Nama Siswa : ' ;
	foreach ($first->mahasiswa as $temp){
		echo '<br><b> ' .$temp->nama.'</b><br>';
	} 
});

Route::get('soal2', function(){
	$second = Wali::where('nama','=','agus setiawan')->first();
	echo 'Nama Wali : ', '<b>' .$second->nama.'</b>','<br>';
	echo 'Nama Siswa : ' , '<b>' .$second->siswa->nama.'</b>';
	
});


Route::get('soal3', function(){
	$thre = Jurusan::where('nama_jurusan', '=' , 'perbankan')->first();
	foreach ($thre->kelas as $tempt){
		echo 'Nama Siswa : ',  '<b>' .$tempt->nama.'</b>','<br>';
		echo 'Jurusan : ','<b>' .$tempt->kelas->nama_jurusan.'</b>','<br>';
		   echo '<br>';
	}

});



