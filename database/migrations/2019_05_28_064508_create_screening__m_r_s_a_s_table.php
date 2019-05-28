<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScreeningMRSASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screening__m_r_s_a_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('spesimen');
            $table->boolean('pilih');
            $table->string('slug')->nullable()->default(null);
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
        Schema::dropIfExists('screening__m_r_s_a_s');
    }
}
