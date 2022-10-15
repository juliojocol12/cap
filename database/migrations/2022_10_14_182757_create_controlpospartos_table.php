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
            $table->String("FrecuenciaCardiaca",20);
            $table->String("Temperatura",10);
            $table->string("LactanciaMaterna",2);

            $table->Integer("ClasificacionPosparto_id")->unsigned();
            $table->foreign('ClasificacionPosparto_id')->references('idClasificacionPospartos')->on('clasificacionpospartos');

            $table->Integer("ConductaPosparto_id")->unsigned();
            $table->foreign('ConductaPosparto_id')->references('idConductaPospartos')->on('conductapospartos');

            $table->Integer("ConsejeriaPosparto_id")->unsigned();
            $table->foreign('ConsejeriaPosparto_id')->references('idConsejeriaPospartos')->on('consejeriapospartos');

            $table->Integer("OtrosControlesObs_id")->unsigned();
            $table->foreign('OtrosControlesObs_id')->references('idOtrosControlesObs')->on('otroscontrolesobs');

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
