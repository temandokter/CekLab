<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkClinicsIdOnCinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('check_labs', function (Blueprint $table) {
            $table->renameColumn('clinics_id', 'clinic_id');

            $table->foreign('clinic_id')->references('id')->on('clinics')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('check_labs', function (Blueprint $table) {
            //
        });
    }
}
