<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('sujet');
            $table->string('role');
            $table->string('motdepasse')->nullable();
            $table->text('contenu')->nullable();
            $table->boolean('tache')->default(0)->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->boolean('commentaire')->default(0)->nullable();
            $table->unsignedInteger('reponse_id')->nullable();
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
        Schema::dropIfExists('messages');
    }
}
