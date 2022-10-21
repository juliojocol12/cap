<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstablecimientosaludosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientosaludos', function (Blueprint $table) {
            $table->increments('idEstablecimientoSaludos');
            $table->string('Nombre',45);
            $table->string('Direccion',60);
            $table->string('Comunidad',30);
            $table->string('PuestoSalud',30);
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
        Schema::dropIfExists('establecimientosaludos');
    }
}
