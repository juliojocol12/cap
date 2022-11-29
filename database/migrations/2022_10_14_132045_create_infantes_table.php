<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infantes', function (Blueprint $table) {
            $table->increments('idInfantes');
            $table->string('Nombres',45);
            $table->string('Apellidos',45);
            $table->string('Genero',45);
            $table->date('FechaNacimiento');
            $table->time('HoraNaciemiento')->nullable();
            $table->string('LugarNacimiento');
            $table->decimal('PesoLB', 5, 2);
            $table->decimal('Altura', 5, 2);
            $table->string('Observaciones',45)->nullable();

            $table->unsignedInteger('Establecimientoid')->nullable();
            $table->foreign('Establecimientoid')->references('idEstablecimientoSaludos')->on('establecimientosaludos');


            $table->unsignedInteger('Personal_idD')->nullable();
            $table->foreign('Personal_idD')->references('idPersonal')->on('personales');
            
            $table->date('FechaEgreso')->nullable();
            $table->string('TipoSanguineo',5)->nullable();

            $table->unsignedInteger('DatosPersonalesPacientes_id');
            $table->foreign('DatosPersonalesPacientes_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');
            
            $table->unsignedInteger('idDatosFamiliares')->nullable();
            $table->foreign('idDatosFamiliares')->references('idDatosFamiliares')->on('datosfamiliares');

            $table->string('Parentesco',20)->nullable();

            $table->unsignedBigInteger('Usuario_id')->nullable();
            $table->foreign('Usuario_id')->references('id')->on('users');

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
        Schema::dropIfExists('infantes');
    }
}
