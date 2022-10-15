<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFcprenatalpostpartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fcprenatalpostpartos', function (Blueprint $table) {
            $table->increments('idFCPrenatalPostpartos');
            $table->string('ExpedienteNo',10);
            $table->date('Fecha');
            
            $table->unsignedInteger('DatosPersonalesPacientes_id');
            $table->foreign('DatosPersonalesPacientes_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');

            $table->unsignedInteger('EstablecimientoSalud_id');
            $table->foreign('EstablecimientoSalud_id')->references('idEstablecimientoSaludos')->on('establecimientosaludos');

            $table->unsignedInteger('SignosySintomas_id');
            $table->foreign('SignosySintomas_id')->references('idSignosySintomas')->on('signosysintomas');

            $table->string('RegistrodeReferencia',190)->nullable();
            $table->string('MotivoConsulta',20);
            $table->string('HistorialEnfermedadActual',200);

            $table->unsignedInteger('AnteObstetricos_id');
            $table->foreign('AnteObstetricos_id')->references('idAnteObstetricos')->on('anteobstreticos');

            $table->unsignedInteger('AntecedentesMedicos_id');
            $table->foreign('AntecedentesMedicos_id')->references('idAntecedentesMedico')->on('antecedentesmedicos');

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
        Schema::dropIfExists('fcprenatalpostpartos');
    }
}
