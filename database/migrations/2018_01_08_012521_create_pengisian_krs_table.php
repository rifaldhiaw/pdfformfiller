<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengisianKrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengisian_krs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('npm');
            $table->string('fakultas');
            $table->string('jurusan');
            $table->string('prodi');
            $table->string('semester');
            $table->string('tahun_ajar');
            $table->integer('jumlah_sks');
            $table->string('dosen_pa');
            $table->string('nip_dosen_pa');
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
        Schema::dropIfExists('pengisian_krs');
    }
}
