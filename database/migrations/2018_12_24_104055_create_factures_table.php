<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('adresse')->nullable()->default(NULL);
            $table->string('telephone')->nullable()->default(NULL);
            $table->string('email');
            $table->string('identiteunique');
            $table->string('produit');
            $table->integer('qte')->unsigned();
            $table->integer('duree')->unsigned();
            $table->string('type');
            $table->string('prixHT');
            $table->string('soustotalHT');
            $table->string('tva');
            $table->string('totalTTC');
            $table->integer('user_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('datefacture')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
}
