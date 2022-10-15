<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadecimientoinfantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padecimientoinfantes', function (Blueprint $table) {
            $table->increments('idPadecimientoInfantes');
            $table->string('TipoControl',45);
            $table->date('FechaControl');
            $table->string('DescripcionControl',45);
            
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
        Schema::dropIfExists('padecimientoinfantes');
    }
}
