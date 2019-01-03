<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaiementpaypalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiementpaypals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('nomfacture');
            $table->string('identiteunique');
            $table->string('produit');
            $table->date('datefacture');
            $table->string('type');
            $table->string('prixHT');
            $table->integer('qte')->unsigned();
            $table->string('soustotalHT');
            $table->string('tva');
            $table->string('prixTTC');
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('paiementpaypals');
    }
}
