<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefSaranaPeralatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_sarana_peralatan', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('lembaga_id');
            $table->integer('jenis_peralatan_id');
            $table->integer('jumlah');
            $table->integer('jumlah_baik');
            $table->integer('jumlah_rusak_ringan');
            $table->integer('jumlah_rusak_berat');
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
        Schema::dropIfExists('ref_sarana_peralatan');
    }
}
