<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infantes', function (Blueprint $table) {
            $table->increments('idInfantes');
            $table->string('Nombres',45);
            $table->string('Apellidos',45);
            $table->string('Genero',45);
            $table->date('FechaNacimiento');
            $table->time('HoraNaciemiento')->nullable();
            $table->decimal('PesoLB', 5, 2);
            $table->decimal('PesoOnz', 5, 2);
            $table->decimal('Altura', 5, 2);
            $table->string('Observaciones',45)->nullable();
            $table->date('FechaEgreso')->nullable();
            $table->string('TipoSanguineo',5)->nullable();
            $table->unsignedInteger('DatosPersonalesPacientes_id');
            $table->unsignedInteger('DatosFamiliares_id');
            
            $table->foreign('DatosPersonalesPacientes_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');
            $table->foreign('DatosFamiliares_id')->references('idDatosFamiliares')->on('datosfamiliares');
            
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
        Schema::dropIfExists('infantes');
    }
}
