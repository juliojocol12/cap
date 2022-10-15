<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtroscontrolesobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otroscontrolesobs', function (Blueprint $table) {
            $table->increments('idOtrosControlesObs');
            $table->date('Fecha');
            $table->string('ObservacionesAdicionales', 300);
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
        Schema::dropIfExists('otroscontrolesobs');
    }
}
