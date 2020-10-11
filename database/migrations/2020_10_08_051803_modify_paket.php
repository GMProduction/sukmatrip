<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyPaket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pakets', function (Blueprint $table) {
            //
            $table->dropColumn('durasi');
            $table->dropForeign('pakets_id_tour_foreign');
            $table->dropColumn('id_tour');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pakets', function (Blueprint $table) {
            //
        });
    }
}
