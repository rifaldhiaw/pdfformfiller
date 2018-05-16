<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeminarKpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminar_kps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id'); //nama, npm, dosen_pa, nip_pa
            $table->string('judul');
            $table->string('tempat_pkl');
            $table->string('pembimbing_lapang');
            $table->string('nip_lapang');
            $table->string('koor_kp');
            $table->string('nip_koor');
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
        Schema::dropIfExists('seminar_kps');
    }
}
