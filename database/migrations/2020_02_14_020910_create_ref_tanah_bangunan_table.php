<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefTanahBangunanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_tanah_bangunan', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('lembaga_id');
            $table->double('luas_tanah_total');
            $table->double('luas_bangunan_total');
            $table->double('luas_bangunan');
            $table->double('luas_tempat_parkir');
            $table->double('luas_lapangan');
            $table->double('luas_kebun');
            $table->double('luas_taman');
            $table->double('luas_lahan_kosong');
            $table->double('luas_lainnya');
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
        Schema::dropIfExists('ref_tanah_bangunan');
    }
}
