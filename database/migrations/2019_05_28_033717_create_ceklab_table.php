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
        Schema::create('check_labs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lab');
            $table->string('slug')->nullable()->default(null);
            $table->unsignedBigInteger('id_klinik');
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
        Schema::dropIfExists('check_labs');
    }
}
