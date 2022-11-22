<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id', true);
            
            $table->string('title',100);

            $table->unsignedInteger('datosPersonalesPacientes_id');
            $table->foreign('datosPersonalesPacientes_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');

            $table->string('establecimiento',100);

            $table->unsignedInteger('Establecimientoid');
            $table->foreign('Establecimientoid')->references('idEstablecimientoSaludos')->on('establecimientosaludos');

            $table->string('comunidad',100);

            $table->text('descripcion');

            $table->string('color',20);
            $table->string('textColor',20);

            $table->dateTime('start');
            $table->dateTime('end');

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
        Schema::dropIfExists('eventos');
    }
}
