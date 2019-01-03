<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email');
            $table->string('identiteunique');
            $table->string('produit');
            $table->date('datefacture');
            $table->integer('qte')->unsigned();
            $table->integer('duree')->unsigned();
            $table->string('type');
            $table->string('prixHT');
            $table->string('soustotalHT');
            $table->string('tva');
            $table->string('totalTTC');
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
        Schema::dropIfExists('orders');
    }
}
