<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPenginapansToTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            //
//            $table->dropColumn('id_paket');
            $table->bigInteger('id_paket')->unsigned()->nullable(true)->change();
            $table->bigInteger('id_penginapan')->unsigned()->nullable(true);
            $table->foreign('id_penginapan')->references('id')->on('penginapans');
//            $table->foreign('id_paket')->references('id')->on('pakets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            //
        });
    }
}
