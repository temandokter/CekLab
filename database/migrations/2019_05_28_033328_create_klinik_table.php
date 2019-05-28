<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlinikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klinik', function (Blueprint $table) {
            $table->bigIncrements('id_klinik');
            $table->unsignedBigInteger('id_dokter');
            $table->string('nama_klinik');
            $table->text('alamat_klinik');
            $table->timestamps();

            $table->foreign('id_dokter')->references('id_dokter')->on('dokter');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('klinik');
    }
}
