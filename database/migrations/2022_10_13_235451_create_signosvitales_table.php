<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignosvitalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signosvitales', function (Blueprint $table) {
            $table->increments('idSignosVitales');
            $table->string('PresionArterial', 20);
            $table->string('Temperatura', 10);
            $table->string('RespiracionPorMinuto', 20);
            $table->string('FrecuenciaCardiacaMaternal', 20);
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
        Schema::dropIfExists('signosvitales');
    }
}
