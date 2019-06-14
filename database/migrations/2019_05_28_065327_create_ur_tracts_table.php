<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrTractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ur_tracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('spesimen');
            $table->boolean('pilih');
            $table->string('slug')->nullable()->default(null);
            $table->unsignedBigInteger('id_pasien');
            $table->timestamps();
            $table->foreign('id_pasien')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ur_tracts');
    }
}
