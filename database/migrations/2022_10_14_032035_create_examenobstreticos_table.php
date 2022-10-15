<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenobstreticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenobstreticos', function (Blueprint $table) {
            $table->increments('idExamenObstreticos');
            $table->string('ExamenMamas', 2);
            $table->string('ObservacionAbdominal',25);
            $table->string('AlturaUterina',45);
            $table->string('PresenciaMovimientoFetales',2);
            $table->string('FrecuenciaCardiacaFetal',45);
            $table->string('ManiobrasLeopold',45)->nullable();
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
        Schema::dropIfExists('examenobstreticos');
    }
}
