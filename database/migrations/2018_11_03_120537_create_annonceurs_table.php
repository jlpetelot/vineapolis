<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnonceursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonceurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('societe');
            $table->string('email');
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->string('annonce')->nullable();
            $table->string('urlsite')->nullable();
            $table->boolean('actif')->nullable()->default(NULL);
            $table->boolean('paye')->nullable()->default(0);
            $table->unsignedInteger('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('annonceurs');
    }
}
