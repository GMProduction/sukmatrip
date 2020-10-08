<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDurationToPenginapans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penginapans', function (Blueprint $table) {
            //
            $table->bigInteger('duration_id')->unsigned()->nullable(true);
            $table->foreign('duration_id')->references('id')->on('durations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penginapans', function (Blueprint $table) {
            //
            $table->dropColumn('duration_id');
        });
    }
}
