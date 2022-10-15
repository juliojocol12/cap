<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsejeriapospartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consejeriapospartos', function (Blueprint $table) {
            $table->increments('idConsejeriaPospartos');
            $table->string('LactanciaMaternaExclusiva', 30);
            $table->string('PlanificacionFamiliarPosparto', 30);
            $table->string('AlimentacionMadreLactante', 30);
            $table->string('LactanciaMaternaVIH', 30);
            $table->string('MujerVIH', 30);
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
        Schema::dropIfExists('consejeriapospartos');
    }
}
