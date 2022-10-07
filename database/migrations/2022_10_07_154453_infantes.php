<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Infantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Pueblo', function (Blueprint $table) {
            $table->id('idPueblo');
            $table->string('Nombre',15);
            $table->timestamps();
        });

        Schema::create('DatosPersonalesPaciente', function (Blueprint $table) {
            $table->id('idDatosPersonalesPaciente');
            $table->string('NombresPaciente',25);
            $table->string('ApellidosPaciente',25);
            $table->date('FechaNaciemientoPaciente');
            $table->integer('CUI');
            $table->string('ProfesionOficio',25);
            $table->string('Domicilio',45);
            $table->integer('Telefono');
            $table->integer('Celular');
            $table->string('EstadoCivil',7);
            $table->decimal('Peso',2, 2);
            $table->string('TipoSanguineo',5);
            $table->string('MedicamentosActualmente',7);
            $table->string('Migrante',45);
            $table->unsignedBigInteger('Pueblo_idPueblo');
            $table->timestamps();
            $table->foreign('Pueblo_idPueblo')->references('idPueblo')->on('Pueblo');
        });

        Schema::create('DatosFamiliares', function (Blueprint $table) {
            $table->id('idDatosFamiliares');
            $table->string('NombresFamiliar',25);
            $table->string('ApellidosFamiliar',25);
            $table->string('Parentesco',10);
            $table->tinyInteger('TelefonoFamiliar')->nullable();
            $table->tinyInteger('CelularFamiliar');
        });

        Schema::create('Infantes', function (Blueprint $table) {
            $table->id('idInfantes');
            $table->string('Nombres',45);
            $table->string('Apellidos',45);
            $table->string('Genero',45);
            $table->date('FechaNacimiento');
            $table->time('HoraNaciemiento')->nullable();
            $table->decimal('PesoLB', 2, 2);
            $table->decimal('PesoOnz', 2, 2);
            $table->string('Altura',5);
            $table->string('Observaciones',45)->nullable();
            $table->date('FechaEgreso')->nullable();
            $table->string('TipoSanguineo',5)->nullable();
            
            $table->unsignedBigInteger('DatosFamiliares_idDatosFamiliar');
            $table->unsignedBigInteger('DatosPersonalesPacientes');

            $table->foreign('DatosFamiliares_idDatosFamiliar')->references('idDatosFamiliares')->on('DatosFamiliares');
            $table->foreign('DatosPersonalesPacientes')->references('idDatosPersonalesPaciente')->on('DatosPersonalesPaciente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('Infantes');
        Schema::dropIfExists('DatosFamiliares');
        Schema::dropIfExists('DatosPersonalesPaciente');
        Schema::dropIfExists('Pueblo');
    }
}
