<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDataToClinicalInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clinical_infos', function (Blueprint $table) {
            $table->boolean('gejala_isk')->after('id');
            $table->boolean('riwayat_msrsa')->after('id');
            $table->boolean('alergi_penicilin')->after('id');
            $table->boolean('pid')->after('id');
            $table->boolean('diabetik')->after('id');
            $table->boolean('kehamilan')->after('id');
            $table->boolean('transplantasi')->after('id');
            $table->boolean('ventilator')->after('id');
            $table->boolean('immunokompromise')->after('id');
            $table->boolean('paska_bedah')->after('id');
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
