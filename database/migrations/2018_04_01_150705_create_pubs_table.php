<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('legende');
            $table->string('internet');
            $table->string('categorie');
            $table->string('aliascategorie');
            $table->string('label')->nullable()->default(NULL);
            $table->string('format')->nullable()->default(NULL);
            $table->string('formatremplace')->nullable()->default(NULL);
            $table->float('prix')->nullable()->default(NULL);
            $table->string('imageadmin')->nullable()->default(NULL);
            $table->unsignedInteger('product_id')->unsigned();
            $table->unsignedInteger('annonceur_id')->nullable()->default(NULL);
            $table->integer('actif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pubs');
    }
}
