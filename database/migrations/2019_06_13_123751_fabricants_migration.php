<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FabricantsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_fabricants', function (Blueprint $table) {
          $table->increments('id');
          $table->string('gs');
          $table->string('equipe');
          $table->string('mail');

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
        Schema::dropIfExists('table_fabricants');
    }
}
