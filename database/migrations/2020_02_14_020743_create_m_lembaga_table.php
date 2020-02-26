<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMLembagaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_lembaga', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('nama_lembaga');
            $table->string('nama_pj_lembaga');
            $table->string('hp');
            $table->string('phone');
            $table->integer('provinsi_id');
            $table->integer('kabupaten_id');
            $table->integer('kecamatan_id');
            $table->integer('kelurahan_id');
            $table->text('alamat');
            $table->string('email');
            $table->string('jenis_pendidikan');
            $table->string('jenis_lembaga');
            $table->string('status_lembaga');
            $table->date('tanggal_berdiri');
            $table->string('path_akta_notaris');
            $table->string('path_ad_art');
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
        Schema::dropIfExists('m_lembaga');
    }
}
