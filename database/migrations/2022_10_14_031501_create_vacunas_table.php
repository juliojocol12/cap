<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacunas', function (Blueprint $table) {
            
            $table->increments('idVacunas');
            $table->string('NombreVacuna',45);
            $table->string('TipoVacuna',45);
            $table->string('EstadoVacuna',45);
            $table->date('Fechaingreso');
            $table->date('FechaVencimiento');
            $table->string('Cantidad',5);

            $table->unsignedBigInteger('Usuario_id');
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
        Schema::dropIfExists('vacunas');
    }
}
