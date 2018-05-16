<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajuanTemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_temas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id'); //nama, npm, dosen_pa, nip_pa, prodi
            $table->string('karya_tulis');
            $table->string('judul_1');
            $table->string('judul_2')->nullable();
            $table->string('pembimbing');
            $table->string('nip_pembimbing');
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
        Schema::dropIfExists('pengajuan_temas');
    }
}
