<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConductapospartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductapospartos', function (Blueprint $table) {
            $table->increments('idConductaPospartos');
            $table->string('SulfatoFerroso',25);
            $table->string('AcidoFolico',25);
            $table->string('VacuncacionTdapMadre',20);
            $table->string('Medicamento',45);
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
        Schema::dropIfExists('conductapospartos');
    }
}
