<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeminarUsulhasilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminar_usulhasils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('npm');
            $table->string('judul');
            $table->string('jenis_seminar');
            $table->string('pembimbing');
            $table->string('nip_pembimbing');
            $table->string('status_dosen2');
            $table->string('nama_dosen2');
            $table->string('pembahas');
            $table->string('dosen_pa');
            $table->string('nip_pa');
            $table->string('tanggal_berkas');
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
        Schema::dropIfExists('seminar_usulhasils');
    }
}
