<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLloguersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lloguers', function (Blueprint $table) {
            $table->string('dni_client');
            $table->foreign('dni_client')->references('dni_client')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('matricula_auto')->references('matricula_auto')->on('autos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('matricula_auto');
            $table->date('data_prestec');
            $table->date('data_devolucion');
            $table->string('lloc_devolucion');
            $table->integer('preu_dia');
            $table->boolean('prestec_retorn_disponible');
            $table->enum('tipus_asseguranca',["Franquicia_1000Euros", "Franquicia_500Euros", "Sense_franquicia"]);
            $table->primary(['dni_client','matricula_auto']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lloguers');
    }
}
