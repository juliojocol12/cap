<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentesmedicosfamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentesmedicosfamiliares', function (Blueprint $table) {
            $table->increments('idAntecedentesMedicosFamiliares');
            $table->string("Parentesco",10);
            $table->string("Enfermedades",45);
            $table->string("TipoSanguineo",5);
            $table->unsignedInteger("DatosFamiliares_id");
            $table->unsignedInteger("DatosPersonalesPaciente_id");
            
            $table->foreign('DatosFamiliares_id')->references('idDatosFamiliares')->on('datosfamiliares');
            $table->foreign('DatosPersonalesPaciente_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');
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
        Schema::dropIfExists('antecedentesmedicosfamiliares');
    }
}
