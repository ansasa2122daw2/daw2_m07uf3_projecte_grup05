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
            $table->primary('dni_client');
            $table->string('dni_client');
            $table->string('nom');
            $table->string('cognoms');
            $table->integer('num_targeta');
            $table->integer('edat');
            $table->integer('telefon');
            $table->enum('tipus_targeta',["debit", "credit"]);
            $table->string('adreca');
            $table->string('ciutat');
            $table->string('pais');
            $table->integer('num_permis_conduccio');
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
