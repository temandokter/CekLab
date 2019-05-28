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
        Schema::create('clinics', function (Blueprint $table) {
            $table->bigIncrements('id_klinik');
            $table->unsignedBigInteger('id_dokter');
            $table->string('nama_klinik');
            $table->string('slug')->nullable()->default(null);
            $table->text('alamat_klinik');
            $table->timestamps();

            $table->foreign('id_dokter')->references('id_dokter')->on('doctors');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinics');
    }
}
