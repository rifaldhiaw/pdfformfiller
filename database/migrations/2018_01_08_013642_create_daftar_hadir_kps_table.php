<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarHadirKpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_hadir_kps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id'); //nama, npm, prodi, 
            $table->string('judul');
            $table->string('tempat_kp');
            $table->string('alamat');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('pembimbing');
            $table->string('tanggal');
            $table->string('ruang');
            $table->string('hari');
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
        Schema::dropIfExists('daftar_hadir_kps');
    }
}
