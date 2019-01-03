<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVigneronsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vignerons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('societe');
            $table->string('aliassociete')->nullable();
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->string('site')->nullable();
            $table->string('email')->nullable();
            $table->string('latlong')->nullable();
            $table->string('sortevin')->nullable();
            $table->string('qualitevin')->nullable();
            $table->boolean('actif')->nullable()->default(NULL);
            $table->string('departement')->nullable();
            $table->string('francevinicole')->nullable();
            $table->string('region')->nullable();
            $table->text('indiceregion')->nullable();
            $table->string('regionvinicole')->nullable();
            $table->string('aliasregionvinicole')->nullable();
            $table->string('communevinicole')->nullable();
            $table->string('aliascommunevinicole')->nullable();
            $table->string('localitevinicole')->nullable();
            $table->string('aliaslocalitevinicole')->nullable();
            $table->string('zoom')->nullable();
            $table->string('latlongregion')->nullable();
            $table->string('imagereportage')->nullable();
            $table->longText('reportage')->nullable();
            $table->longText('fiche')->nullable();
            $table->string('video')->nullable()->default(NULL);
            $table->unsignedInteger('user_id')->unsigned()->nullable();
            $table->unsignedInteger('product_id')->unsigned()->nullable();
            $table->boolean('paye')->nullable()->default(0);
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
        Schema::dropIfExists('vignerons');
    }
}
