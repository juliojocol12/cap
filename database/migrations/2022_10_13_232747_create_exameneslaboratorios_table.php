<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExameneslaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exameneslaboratorios', function (Blueprint $table) {
            $table->increments('idExamenesLaboratorio');
            $table->string('PruebasEmbarazo', 2)->nullable();
            $table->string('DecripcionPruebasEmbarazo', 10)->nullable();
            $table->string('Hematologia', 2)->nullable();
            $table->string('DescripcionHematologia', 10)->nullable();
            $table->string('GrupoRH', 2)->nullable();
            $table->string('DescripcionGrupoRH', 10)->nullable();
            $table->string('Orina', 2);
            $table->string('DescripcionOrina', 10)->nullable();
            $table->string('Heces', 2)->nullable();
            $table->string('DescirpcionHeces', 10)->nullable();
            $table->string('GlicemiaAyunas', 2);
            $table->string('DescripcionGlicemiaAyunas', 10)->nullable();
            $table->string('VDLR', 2)->nullable();
            $table->string('DescripcionVDLR', 10)->nullable();
            $table->string('VIH', 2)->nullable();
            $table->string('DescipcionVIH', 10)->nullable();
            $table->string('TORCH', 2)->nullable();
            $table->string('DescripcionTORCH', 10)->nullable();
            $table->string('PapanicolaouIVAA', 2)->nullable();
            $table->string('DescripcionPapanicolaouIVAA', 10)->nullable();
            $table->string('HepatitisB', 2)->nullable();
            $table->string('DescripcionHepatitisB', 10)->nullable();
            $table->string('OtrosEstudios', 45);
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
        Schema::dropIfExists('exameneslaboratorios');
    }
}
