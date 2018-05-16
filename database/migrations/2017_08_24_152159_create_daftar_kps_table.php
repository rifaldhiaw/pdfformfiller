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
            $table->integer('user_id'); //nama, npm, pa
            $table->dateTime('dibuat');
            $table->string('semester');
            $table->string('tahun_ajar');
            $table->dateTime('tanggal');
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
