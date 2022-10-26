<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrimercontrolpostpartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primercontrolpostpartos', function (Blueprint $table) {
            $table->increments("idPrimerControlPostpartos");
            
            


            $table->string("NombreServicio",45);
            $table->string("DiasDespuesParto",6);

            $table->unsignedInteger('EstablecimientoSalud_id');
            $table->foreign('EstablecimientoSalud_id')->references('idEstablecimientoSaludos')->on('establecimientosaludos');

            $table->string("QuienAtendioParto",30);

            $table->unsignedInteger('Personal_idD');
            $table->foreign('Personal_idD')->references('idPersonal')->on('personales');

            $table->string("HeridaOperatoria",45);
            $table->string("InvolucionUterina",25);
            $table->String("PresionArterial",20);
            $table->String("FrecuenciaCardiaca",20);
            $table->String("Temperatura",10);
            $table->string("ExamenMamas",75);
            $table->string("ExamenGinecologico",300);
            $table->string("LactanciaMaterna",2);
            $table->string("PorqueNoLactanciaMaterna",45)->nullable();
            $table->string("Diagnostico",200);
            $table->string("ConductaTratamiento",200);
			
			$table->unsignedInteger('Personal_id');
            $table->foreign('Personal_id')->references('idPersonal')->on('personales');

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
        Schema::dropIfExists('primercontrolpostpartos');
    }
}
