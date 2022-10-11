<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosFamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_familiares', function (Blueprint $table) {
            $table->increments('idDatosFamiliares');
            $table->string('NombresFamiliar',25);
            $table->string('ApellidosFamiliar',25);
            $table->string('Parentesco',10);
            $table->string('TelefonoFamiliar',12)->nullable();
            $table->string('CelularFamiliar',12);
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
        Schema::dropIfExists('datos_familiares');
    }
}
