<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveNamaklinisAndPilihklinisOnClinicalInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clinical_infos', function (Blueprint $table) {
            $table->dropColumn(['nama_klinis','pilih_klinis']);
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
