<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCeklabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ceklab', function (Blueprint $table) {
            $table->bigIncrements('id_lab');
            $table->string('nama_lab');
            $table->unsignedBigInteger('id_klinik');
            $table->timestamps();

            $table->foreign('id_klinik')->references('id_klinik')->on('klinik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ceklab');
    }
}
