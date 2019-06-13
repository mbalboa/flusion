<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FluxMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('table_flux', function(Blueprint $table)
      {
        $table->increments('num');
        $table->string('idf');
        $table->string('fichier');
        $table->string('repertoire');
        $table->string('format');
        $table->string('type');
        $table->integer('taille');

        $table->integer('fabricant_id')->unsigned();
        $table->foreign('fabricant_id')->references('id')->on('table_fabricants');

        // Pour créer automatiquement les champs timestamps (created_at, updated_at)
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
        Schema::dropIfExists('table_flux');
    }
}
