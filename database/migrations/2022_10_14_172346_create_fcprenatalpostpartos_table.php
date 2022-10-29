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

            $table->string('HemorragiaVaginal', 2);
            $table->string('DolordeCabeza', 2);
            $table->string('VisionBorrosa', 2);
            $table->string('Convulsion', 2);
            $table->string('DolorAbdominal', 2);
            $table->string('PresionArterial', 2);
            $table->string('Fiebre', 2);
            $table->string('PresentacionesFetales', 2);


            $table->string('RegistrodeReferencia',190)->nullable();

            $table->string('MotivoConsulta',20);
            $table->string('HistoriaEnfermedadActual',200);

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
