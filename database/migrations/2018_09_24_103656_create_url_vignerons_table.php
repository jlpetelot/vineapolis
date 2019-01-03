<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlVigneronsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_vignerons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->nullable();
            $table->string('url')->nullable();
            $table->integer('numpage')->nullable();
            $table->dateTime('creation')->nullable();
            $table->dateTime('miseajour')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('url_vignerons');
    }
}
