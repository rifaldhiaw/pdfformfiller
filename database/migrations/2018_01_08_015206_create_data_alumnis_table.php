<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('npm');
            $table->string('prodi');
            $table->string('email');
            $table->string('nohp');
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('judul');
            $table->string('pembimbing');
            $table->string('nip_pembimbing');
            $table->string('status_dosen2');
            $table->string('nama_dosen2');
            $table->string('nip_dosen2');
            $table->string('pembahas');
            $table->string('nip_pembahas');
            $table->string('tgl_sk_pembimbing');
            $table->string('tgl_usul');
            $table->string('nilai_usul');
            $table->string('tgl_hasil');
            $table->string('nilai_hasil');
            $table->string('tgl_ujian_skripsi');
            $table->string('nilai_ujian_skripsi');
            $table->string('lama_skripsi');
            $table->string('ipk');
            $table->string('toefl');
            $table->string('studi_th');
            $table->string('studi_bln');
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
        Schema::dropIfExists('data_alumnis');
    }
}
