<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenfisicoembarazadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenfisicoembarazadas', function (Blueprint $table) {
            $table->increments('idExamenFisicoEmbarazadas');
            $table->date('FechaPosibleParto');
            $table->string('CircuferenciaBrazo', 5)->comment('Medida en cm');
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
        Schema::dropIfExists('examenfisicoembarazadas');
    }
}
