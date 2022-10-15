<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadecimientopacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padecimientopacientes', function (Blueprint $table) {
            $table->increments('idPadeciemientoPacientes');
            $table->string('TipoControl',15);

            $table->integer('DatosPersonalesPaciente_id')->unsigned();
            $table->Integer("AntecedentesMedicos_id")->unsigned();
            $table->Integer("PadecimientoInfante_id")->unsigned();
            
            //migrar las tablas de datos del paciente, antecedentes medicos del paciente y padecimientopacientes.
            $table->foreign('DatosPersonalesPaciente_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');
            $table->foreign('AntecedentesMedicos_id')->references('idAntecedentesMedico')->on('antecedentesmedicos');
            $table->foreign('PadecimientoInfante_id')->references('idPadecimientoInfantes')->on('padecimientoinfantes');
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
        Schema::dropIfExists('padecimientopacientes');
    }
}
