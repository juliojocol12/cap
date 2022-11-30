<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuertematernasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muertematernas', function (Blueprint $table) {
            $table->increments('idMuerteMaterna');

            $table->unsignedInteger
            ('DatosPersonalesPacientes_id');
            $table->foreign('DatosPersonalesPacientes_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');

            $table->string('Antecedente',200);
            $table->string('Descripcion',250)->nullable();
            $table->date('FechaMuerte')->nullable();
            
            $table->unsignedInteger('Personal_idD')->nullable();
            $table->foreign('Personal_idD')->references('idPersonal')->on('personales');

            $table->unsignedBigInteger('Usuario_id')->nullable();
            $table->foreign('Usuario_id')->references('id')->on('users');

            $table->unsignedInteger('EstablecimientoSalud_id');
            $table->foreign('EstablecimientoSalud_id')->references('idEstablecimientoSaludos')->on('establecimientosaludos');

            $table->string('Estado',2);
            
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
        Schema::dropIfExists('muertematernas');
    }
}
