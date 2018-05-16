<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarHadirSkripsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_hadir_skripsis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id'); //nama, npm
            $table->string('judul');
            $table->string('jenis_seminar');
            $table->string('pembimbing');
            $table->string('status_dosen2');
            $table->string('nama_dosen2');
            $table->string('pembahas');
            $table->string('hari');
            $table->string('tanggal');
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
        Schema::dropIfExists('daftar_hadir_skripsis');
    }
}
