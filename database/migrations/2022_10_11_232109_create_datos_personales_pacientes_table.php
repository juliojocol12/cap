<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosPersonalesPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personales_pacientes', function (Blueprint $table) {
            $table->increments('idDatosPersonalesPacientes');
            $table->string('NombresPaciente',25);
            $table->string('ApellidosPaciente',25);
            $table->date('FechaNaciemientoPaciente');
            $table->integer('CUI');
            $table->string('ProfesionOficio',25);
            $table->string('Domicilio',45);
            $table->integer('Telefono');
            $table->integer('Celular');
            $table->string('EstadoCivil',7);
            $table->decimal('Peso',5, 2);
            $table->string('TipoSanguineo',5);
            $table->string('MedicamentosActualmente',7);
            $table->string('Migrante',45);
            $table->unsignedInteger('pueblo_id');
            $table->foreign('pueblo_id')->references('idPueblo')->on('pueblos');
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
        Schema::dropIfExists('datos_personales_pacientes');
    }
}
