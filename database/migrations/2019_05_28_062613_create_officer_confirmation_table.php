<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficerConfirmationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('officer_confirmation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pasien');
            $table->DATETIME('tanggal');
            $table->string('slug')->nullable()->default(null);
            // $table->unsignedBigInteger('id_pegawai');
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
        Schema::dropIfExists('officer_confirmation');
    }
}
