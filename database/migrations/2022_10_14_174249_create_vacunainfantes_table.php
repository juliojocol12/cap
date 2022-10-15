<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacunainfantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacunainfantes', function (Blueprint $table) {
            $table->increments('idVacunasInfantes');
            $table->dateTime('FechaSuministro');
            $table->unsignedInteger('Vacunas_id');
            $table->unsignedInteger('Infante_id');
            //Migrar la tabla de vacunas antes de esta tabla
            $table->foreign('Vacunas_id')->references('idVacunas')->on('vacunas');
            $table->foreign('Infante_id')->references('idInfantes')->on('infantes');
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
        Schema::dropIfExists('vacunainfantes');
    }
}
