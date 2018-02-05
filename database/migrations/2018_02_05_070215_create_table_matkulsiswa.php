<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMatkulsiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matkulsiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_mahasiswa');
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa')->onDelete('CASCADE');
            $table->unsignedInteger('id_matkul');
            $table->foreign('id_matkul')->references('id')->on('matakuliah')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matkulsiswa');
    }
}
