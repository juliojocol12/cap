<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecentesembarazosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecentesembarazos', function (Blueprint $table) {
            $table->increments('idAntecedentesEmbarazo');
            $table->date('FechaConcepcionBebe');
            $table->string('NumeroEmbarazo',5);
            $table->decimal('PesoBebe',5,2)->nullable();
            $table->string('TipoParto',10);
            $table->unsignedInteger('DatosPersonalesPacientes_id');
            $table->foreign('DatosPersonalesPacientes_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');
            
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
        Schema::dropIfExists('antecentesembarazos');
    }
}
