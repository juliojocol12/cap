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
            $table->date('FechaSuministro');
            $table->unsignedInteger('Vacunas_id');
            $table->foreign('Vacunas_id')->references('idVacunas')->on('vacunas');
            $table->unsignedInteger('Infante_id');
            $table->foreign('Infante_id')->references('idInfantes')->on('infantes');
            $table->unsignedBigInteger('Usuario_id');
            $table->foreign('Usuario_id')->references('id')->on('users');
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
