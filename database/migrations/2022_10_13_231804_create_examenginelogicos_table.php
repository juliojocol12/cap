<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenginelogicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenginelogicos', function (Blueprint $table) {
            $table->increments('idExamenGinecologicos');
            $table->string('TrazasSangreManchado',2);
            $table->string('DescripcionTrazasSangreManchado',45)->nullable();
            $table->string('EnfermedadesGinecologicos',2);
            $table->string('DescripcionEnfermedadesGinecologicos',45)->nullable();
            $table->string('FlujoVaginal',2);
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
        Schema::dropIfExists('examenginelogicos');
    }
}
