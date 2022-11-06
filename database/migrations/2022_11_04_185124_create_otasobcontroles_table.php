<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtasobcontrolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otasobcontroles', function (Blueprint $table) {
            $table->id('idOtasobcontroles');
            $table->date('Fecha');
            $table->unsignedInteger('DatosPersonalesPacientes_id');
            $table->foreign('DatosPersonalesPacientes_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');
            $table->unsignedInteger('ControlPosparto_id');
            $table->foreign('ControlPosparto_id')->references('idControlPosparto')->on('controlpospartos');
            $table->string('ObservacionesAdicionales', 300);
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
        Schema::dropIfExists('otasobcontroles');
    }
}
