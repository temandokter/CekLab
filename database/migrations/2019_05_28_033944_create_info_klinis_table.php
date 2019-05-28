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
        Schema::create('clinical_infos', function (Blueprint $table) {
            $table->bigIncrements('id_klinis');
            $table->string('nama_klinis');
            $table->string('slug')->nullable()->default(null);
            $table->string('pilih_klinis');
            $table->unsignedBigInteger('id_pasien');
            $table->timestamps();

            $table->foreign('id_pasien')->references('id_pasien')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinical_infos');
    }
}
