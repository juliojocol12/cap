<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnteobstreticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anteobstreticos', function (Blueprint $table) {
            $table->increments('idAnteObstetricos');
            $table->date('FechaUltimaRegla');
            $table->string('NoGestas',2);
            $table->string('Partos',2);
            $table->string('Aborto',2);
            $table->string('AbortoConsecutivo',2)->nullable();
            $table->string('NoLIU',2);
            $table->string('NacidosVivos',2);
            $table->string('NacidosMuertos',2);
            $table->string('HijosVivos',2);
            $table->string('HijosMuertos',2);
            $table->string('NoCesareas',2);
            $table->string('EmbarazoMultiples',2);
            $table->date('FechaUltimoParto')->nullable();
            $table->string('NacidosAntesOchoMeses',2);
            $table->string('PreEclampsia',2);
            $table->string('UltimoRNPesoCincolb',2);
            $table->string('UltimoRNPesoSietelb',2);
            $table->string('DeteccionCancerCervix',15)->nullable();
            $table->date('FechaDeteccionCancer')->nullable();
            $table->string('ResultadoNormal',2)->nullable();
            $table->string('MetodoPlanificacionFamiliar',2);
            $table->string('CualMetodoPlanificacionF',45)->nullable();
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
        Schema::dropIfExists('anteobstreticos');
    }
}
