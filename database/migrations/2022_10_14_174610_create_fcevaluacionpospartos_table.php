<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFcevaluacionpospartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fcevaluacionpospartos', function (Blueprint $table) {
            $table->increments('idFCEvaluacionPosparto');

            $table->Integer("FCPrenatalPostparto_id")->unsigned();
            $table->foreign('FCPrenatalPostparto_id')->references('idFCPrenatalPostpartos')->on('fcprenatalpostpartos');

            $table->dateTime('FechaEvaluacionPosparto');

            $table->unsignedInteger("DatosPersonalesPaciente_id");
            $table->foreign('DatosPersonalesPaciente_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');

            $table->unsignedInteger("AnteObstetricos_id");
            $table->foreign('AnteObstetricos_id')->references('idAnteObstetricos')->on('anteobstreticos');

            $table->unsignedInteger("SignosySintomas_id");
            $table->foreign('SignosySintomas_id')->references('idSignosySintomas')->on('signosysintomas');

            $table->string('RegistroReferencia',300);
            
            $table->unsignedInteger("PrimerControlPostparto_id");
            $table->foreign('PrimerControlPostparto_id')->references('idPrimerControlPostpartos')->on('primercontrolpostpartos');

            $table->unsignedInteger("SupleMConse_id");
            $table->foreign('SupleMConse_id')->references('idSupleMConses')->on('suplemconses');

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
        Schema::dropIfExists('fcevaluacionpospartos');
    }
}
