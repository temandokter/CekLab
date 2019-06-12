<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpesimenConditionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spesimen_condition', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kondisi');
            $table->string('pilihan');
            $table->string('slug')->nullable()->default(null);
            // $table->unsignedBigInteger('id_pegawai');
            $table->timestamps();

            // $table->foreign('id_pegawai')->references('id')->on('employee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spesimen_condition');
    }
}
