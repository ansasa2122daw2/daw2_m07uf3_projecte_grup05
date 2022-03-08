<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->primary('dni_clients');
            $table->string('nom');
            $table->string('cognoms');
            $table->integer('num_targeta');
            $table->integer('edat');
            $table->integer('telefon');
            $table->string('tipus_targeta');
            $table->string('adreca');
            $table->string('ciutat');
            $table->string('pais');
            $table->integer('num_conduccio');
            $table->string('email');
            $table->integer('punts_permis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
