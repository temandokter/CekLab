<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->bigIncrements('id_pasien');
            $table->string('nama_pasien');
            $table->string('no_rm');
            $table->date('tgl_lahir');
            $table->bigInteger('umur');
            $table->string('pekerjaan');
            $table->string('status');
            $table->string('jenkel');
            $table->bigInteger('no_antrian');
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
        Schema::dropIfExists('pasien');
    }
}
