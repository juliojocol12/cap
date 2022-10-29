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
            $table->date('FechaUltimaRegla')->nullable();
            $table->string('NoGestas',2)->nullable();
            $table->string('Partos',2)->nullable();
            $table->string('Aborto',2)->nullable();
            $table->string('AbortoConsecutivo',2)->nullable();
            $table->string('NoLIU',2);
            $table->string('NacidosVivos',2)->nullable();
            $table->string('NacidosMuertos',2)->nullable();
            $table->string('HijosVivos',2)->nullable();
            $table->string('HijosMuertos',2)->nullable();
            $table->string('NoCesareas',2)->nullable();
            $table->string('EmbarazoMultiples',2)->nullable();
            $table->date('FechaUltimoParto');
            $table->string('NacidosAntesOchoMeses',2)->nullable();
            $table->string('PreEclampsia',2)->nullable();
            $table->string('UltimoRNPesoCincolb',2)->nullable();
            $table->string('UltimoRNPesoSietelb',2)->nullable();
            $table->string('DeteccionCancerCervix',15)->nullable();
            $table->date('FechaDeteccionCancer')->nullable();
            $table->string('ResultadoNormal',2)->nullable();
            $table->string('MetodoPlanificacionFamiliar',2)->nullable();
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
