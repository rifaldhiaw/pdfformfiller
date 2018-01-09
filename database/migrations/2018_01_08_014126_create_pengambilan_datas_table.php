<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengambilanDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengambilan_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('npm');
            $table->string('judul');
            $table->string('pembimbing');
            $table->string('nama_data');
            $table->string('tempat');
            $table->string('alamat');
            $table->string('karya_tulis');
            $table->string('koor_skripsi');
            $table->string('nip_koor');
            $table->string('tanggal');
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
        Schema::dropIfExists('pengambilan_datas');
    }
}
