<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatospersonalespacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('datospersonalespacientes', function (Blueprint $table) {
            $table->increments('idDatosPersonalesPacientes');
            $table->string('NombresPaciente',25);
            $table->string('ApellidosPaciente',25);
            $table->date('FechaNaciemientoPaciente');
            $table->string('CUI',15)->unique();
            $table->string('ProfesionOficio',25);
            
            $table->string('Descripciondireccion',60);
            $table->string('Grupodireccion',20)->nullable();
            $table->string('Numerodireccion',10);
            $table->string('Zonadireccion',3);
            $table->string('Municipiodep',60);

            $table->string('Telefono',15);
            $table->string('Celular',15);
            $table->string('EstadoCivil',7);
            $table->decimal('Peso',5, 2);
            $table->string('TipoSanguineo',5);
            $table->string('MedicamentosActualmente',100);
            $table->string('Migrante',2);
            $table->unsignedInteger('pueblo_id');
            $table->foreign('pueblo_id')->references('idPueblo')->on('pueblos');

            $table->unsignedInteger('idDatosFamiliares')->nullable();
            $table->foreign('idDatosFamiliares')->references('idDatosFamiliares')->on('datosfamiliares');
            
            $table->string('Parentesco',20)->nullable();

            $table->unsignedBigInteger('Usuario_id')->nullable();
            $table->foreign('Usuario_id')->references('id')->on('users');

            $table->string('Stado',2);

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
        Schema::dropIfExists('datospersonalespacientes');
    }
}
