<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body')->nullable();
            $table->string('name');
            $table->string('imageprofil')->default('logov.png');
            $table->unsignedInteger('vigneron_id');
            $table->string('user_email')->nullable();
            $table->text('reponse')->nullable();
            $table->timestamps();

            $table->foreign('vigneron_id')->references('id')->on('vignerons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
