<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdPasienOnLrTracts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lr_tracts', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pasien')->after('id');

            $table->foreign('id_pasien')->references('id')->on('patients')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lr_tracts', function (Blueprint $table) {
            $table->dropForeign(['id_pasien']);
            $table->dropColumn('id_pasien');
        });
    }
}
