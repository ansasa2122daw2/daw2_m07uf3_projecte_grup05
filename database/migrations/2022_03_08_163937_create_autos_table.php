<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->primary('matricula_auto');
            $table->string('matricula_auto');
            $table->string('marca');
            $table->string('model');
            $table->string('color');
            $table->enum('tipus_combustible',["gasolina", "diesel", "electric"]);
            $table->integer('num_bastidor');
            $table->integer('num_plazas');
            $table->integer('num_portes');
            $table->integer('grandaria_maleter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos');
    }
}
