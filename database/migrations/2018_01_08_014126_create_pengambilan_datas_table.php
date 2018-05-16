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
            $table->integer('user_id'); //nama, npm, 
            $table->string('judul');
            $table->string('pembimbing');
            $table->string('nama_data');
            $table->string('tempat');
            $table->string('alamat');
            $table->string('karya_tulis');
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
