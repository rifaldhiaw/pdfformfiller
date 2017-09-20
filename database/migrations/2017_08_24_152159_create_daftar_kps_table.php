<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarKpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_kps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('npm');
            $table->dateTime('dibuat');
            $table->string('program_studi');
            $table->string('semester');
            $table->string('tahun_ajar');
            $table->dateTime('tanggal');
            $table->string('dosen_pa');
            $table->string('nip_pa');
            $table->string('tempat_pkl');
            $table->string('alamat_pkl');
            $table->rememberToken();
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
        Schema::dropIfExists('daftar_kps');
    }
}
