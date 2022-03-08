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
            $table->string('datos_prestec');
            $table->string('datos_devolucion');
            $table->string('lloc_devolucion');
            $table->integer('preu_dia');
            $table->string('prestec_retorn_disponible');
            $table->string('tipus_asseguranca');
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
