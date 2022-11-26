<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbortosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abortos', function (Blueprint $table) {
            $table->increments('idAbortos');

            $table->unsignedInteger
            ('DatosPersonalesPacientes_id');
            $table->foreign('DatosPersonalesPacientes_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');

            $table->string('Antecedente',2);
            $table->string('Descripcion',250)->nullable();
            $table->date('FechaAborto')->nullable();
            
            $table->unsignedInteger('Personal_idD')->nullable();
            $table->foreign('Personal_idD')->references('idPersonal')->on('personales');

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
        Schema::dropIfExists('abortos');
    }
}
