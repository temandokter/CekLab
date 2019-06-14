<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkPatientIdOnCinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clinical_infos', function (Blueprint $table) {
            $table->renameColumn('patients_id', 'patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clinical_infos', function (Blueprint $table) {
            //
        });
    }
}
