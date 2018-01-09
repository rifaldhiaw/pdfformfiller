<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlihProgramLuarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alih_program_luars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('npm');
            $table->string('prodi');
            $table->string('universitas');
            $table->string('akreditas');
            $table->string('sks');
            $table->string('ipk');
            $table->string('smt');
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
        Schema::dropIfExists('alih_program_luars');
    }
}
