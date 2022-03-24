<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuaris', function (Blueprint $table) {
            $table->string('nom');
            $table->string('cognom');
            $table->string('email')->primary();
            $table->string('contrasenya');
            $table->enum('tipus',["treballador","cap_departament"]);
            $table->date('hora_entrada')->nullable()->change();
            $table->date('hora_sortida')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuaris');
    }
}
