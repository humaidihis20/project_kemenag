<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_alumni', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('lembaga_id');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('provinsi_id');
            $table->integer('kabupaten_id');
            $table->integer('kecamatan_id');
            $table->integer('kelurahan_id');
            $table->text('alamat');
            $table->string('no_hp');
            $table->string('email');
            $table->date('tanggal_masuk');
            $table->string('nama_ibu');
            $table->string('nama_bapak');
            $table->date('tanggal_lulus');
            $table->string('nomor_sertifikat');
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
        Schema::dropIfExists('m_alumni');
    }
}
