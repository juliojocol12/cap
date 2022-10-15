<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConductasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductas', function (Blueprint $table) {
            $table->increments('idConductas');
            $table->string("SulfatoFerroso",30);
            $table->string("AcidoFolico",30);
            $table->string("VacunacionTdTdap",30);
            $table->string("VacunacionInfluenza",30);
            $table->string("OtrosTratamientos",30);
            $table->string("Referencia",30);
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
        Schema::dropIfExists('conductas');
    }
}
