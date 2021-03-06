<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrefecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prefectures', function (Blueprint $table) {
            $table->increments('PrefecturesID');
            $table->integer('RegionID')->unsigned();
            $table->string('PrefecturesName',20)->unique();
            //$table->binary('PrefecturesIcon');
            $table->string('PrefecturesIcon',100)->nullable();

            $table->foreign('RegionID')->references('RegionID')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prefectures', function (Blueprint $table) {
            $table->dropForeign('prefectures_RegionID_foreign');
        });

        Schema::dropIfExists('prefectures');
    }
}
