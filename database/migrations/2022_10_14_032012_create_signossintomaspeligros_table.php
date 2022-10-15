<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignossintomaspeligrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signossintomaspeligros', function (Blueprint $table) {
            $table->increments('idSignosSintomasPeligros');
            $table->string('EvaluacionInicialRapida',2);
            $table->string('DescripcionEvaluacion',150)->nullable();
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
        Schema::dropIfExists('signossintomaspeligros');
    }
}
