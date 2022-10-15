<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controles', function (Blueprint $table) {
            $table->increments('idControles');
            $table->string('NoControl',15);
            $table->string('SemanasEmbarazo',5);
            $table->date('FechaVisita');

            $table->unsignedInteger('DatosPersonalesPacientes_id');
            $table->foreign('DatosPersonalesPacientes_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');

            $table->unsignedInteger('ExamenFisicoEmbarazadas_id');
            $table->foreign('ExamenFisicoEmbarazadas_id')->references('idExamenFisicoEmbarazadas')->on('examenfisicoembarazadas');

            $table->unsignedInteger('SignosSintomasPeligros_id');
            $table->foreign('SignosSintomasPeligros_id')->references('idSignosSintomasPeligros')->on('signossintomaspeligros');

            $table->unsignedInteger('SignosVitales_id');
            $table->foreign('SignosVitales_id')->references('idSignosVitales')->on('signosvitales');

            $table->unsignedInteger('EvaNutriConUnos_id');
            $table->foreign('EvaNutriConUnos_id')->references('idEvaNutriConUnos')->on('evanutriconunos');

            $table->unsignedInteger('EvaluacionNutricionControles_id');
            $table->foreign('EvaluacionNutricionControles_id')->references('idEvaNutricionControles')->on('evanutricioncontroles');

            $table->unsignedInteger('ExamenGeneral_id');
            $table->foreign('ExamenGeneral_id')->references('idExamenGenerales')->on('examengenerales');

            $table->unsignedInteger('ExamenObstreticos_id');
            $table->foreign('ExamenObstreticos_id')->references('idExamenObstreticos')->on('examenobstreticos');

            $table->unsignedInteger('ExamenGinecologico_id');
            $table->foreign('ExamenGinecologico_id')->references('idExamenGinecologicos')->on('examenginelogicos');

            $table->unsignedInteger('ExamenesLaboratorio_id');
            $table->foreign('ExamenesLaboratorio_id')->references('idExamenesLaboratorio')->on('exameneslaboratorios');

            $table->unsignedInteger('Clasificacion_id');
            $table->foreign('Clasificacion_id')->references('idClasificacion')->on('clasificaciones');

            $table->unsignedInteger('Conducta_id');
            $table->foreign('Conducta_id')->references('idConductas')->on('conductas');

            $table->unsignedInteger('Consejeria_id');
            $table->foreign('Consejeria_id')->references('idConsejerias')->on('conserjerias');

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
        Schema::dropIfExists('controles');
    }
}
