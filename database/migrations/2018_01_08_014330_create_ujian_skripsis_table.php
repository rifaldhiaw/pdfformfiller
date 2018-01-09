<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUjianSkripsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujian_skripsis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('npm');
            $table->string('judul');
            $table->string('ketua_penguji');
            $table->string('nip_ketua_penguji');
            $table->string('status_dosen2');
            $table->string('nama_dosen2');
            $table->string('nip_dosen2');
            $table->string('penguji');
            $table->string('nip_penguji');
            $table->string('dosen_pa');
            $table->string('nip_pa');
            $table->string('tanggal_berkas');
            $table->string('hari');
            $table->string('tanggal');
            $table->string('pukul');
            $table->string('ruang');
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
        Schema::dropIfExists('ujian_skripsis');
    }
}
