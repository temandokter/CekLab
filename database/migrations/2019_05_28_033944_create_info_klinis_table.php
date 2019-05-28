<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoKlinisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_klinis', function (Blueprint $table) {
            $table->bigIncrements('id_klinis');
            $table->string('nama_klinis');
            $table->string('pilih_klinis');
            $table->unsignedBigInteger('id_pasien');
            $table->timestamps();

            $table->foreign('id_pasien')->references('id_pasien')->on('pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_klinis');
    }
}
