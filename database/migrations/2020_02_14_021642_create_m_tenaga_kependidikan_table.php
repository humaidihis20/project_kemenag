<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMTenagaKependidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_tenaga_kependidikan', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('lembaga_id');
            $table->string('gelar_depan');
            $table->string('gelar_belakang');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->date('tmt');
            $table->string('status_pegawai');
            $table->integer('provinsi_id');
            $table->integer('kabupaten_id');
            $table->integer('kecamatan_id');
            $table->integer('kelurahan_id');
            $table->text('alamat');
            $table->string('no_hp');
            $table->string('email');
            $table->string('jabatan');
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
        Schema::dropIfExists('m_tenaga_kependidikan');
    }
}
