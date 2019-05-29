<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDateSpesimenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('date_spesimen', function (Blueprint $table) {
            $table->bigIncrements('id_tanggal_spesimen');
            $table->DATETIME('tanggal');
            $table->string('slug')->nullable()->default(null);
            $table->unsignedBigInteger('id_pegawai');
            $table->timestamps();

            $table->foreign('id_pegawai')->references('id_pegawai')->on('employee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('date_spesimen');
    }
}
