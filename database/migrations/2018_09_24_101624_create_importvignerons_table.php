<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImportvigneronsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('importvignerons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->nullable();
            $table->string('societe')->nullable();
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->string('latlong')->nullable();
            $table->string('sortevin')->nullable();
            $table->dateTime('creation')->nullable();
            $table->dateTime('synchronisation')->nullable();
            $table->integer('url_vignerons');
            $table->boolean('statut')->nullable()->default(NULL);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('importvignerons');
    }
}
