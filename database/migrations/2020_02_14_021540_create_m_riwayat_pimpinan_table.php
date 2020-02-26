<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMRiwayatPimpinanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_riwayat_pimpinan', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('lembaga_id');
            $table->string('nama_pimpinan');
            $table->string('jabatan');
            $table->date('periode_awal');
            $table->date('periode_akhir');
            $table->integer('status');
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
        Schema::dropIfExists('m_riwayat_pimpinan');
    }
}
