<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlpospartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controlpospartos', function (Blueprint $table) {
            $table->increments("idControlPosparto");

            $table->string("NoControl",2);

            $table->Integer("FCEvaluacionPosparto_id")->unsigned();
            $table->foreign('FCEvaluacionPosparto_id')->references('idFCEvaluacionPosparto')->on('fcevaluacionpospartos');

            $table->string("SemanasDespuesParto",5);            
            $table->date("FechaVisita");
            $table->string("InvolucionUterina",25);
            $table->string("ExamenMamas",45);
            $table->string("HeridaOperatiria",25);
            $table->string("ExamenGInecológico",200);
            $table->String("PresionArterial",20);
            $table->String("MMHG",20);
            $table->String("FrecuenciaCardiaca",20);
            $table->String("Temperatura",10);
            $table->string("LactanciaMaterna",2);

            $table->string('ProblemasDetectados', 100)->nullable();

            $table->string('SulfatoFerroso',25);
            $table->string('AcidoFolico',25);
            $table->string('VacuncacionTdapMadre',20);
            $table->string('Medicamento',45);

            $table->string('LactanciaMaternaExclusiva', 30);
            $table->string('PlanificacionFamiliarPosparto', 30);
            $table->string('AlimentacionMadreLactante', 30);
            $table->string('LactanciaMaternaVIH', 30);
            $table->string('MujerVIH', 30);

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
        Schema::dropIfExists('controlpospartos');
    }
}
