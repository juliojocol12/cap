<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentesmedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentesmedicos', function (Blueprint $table) {
            $table->increments('idAntecedentesMedico');
            $table->string('AsmaBronquial',2);
            $table->string('HipertensionArterial',2);
            $table->string('Cancer',2);
            $table->string('ITS',2);
            $table->string('Chagas',2);
            $table->string('TomaMedicamentos',2);
            $table->string('TrastornoPiscoSocial',2);
            $table->string('ViolenciaGenero',2);
            $table->string('Diabetes',2);
            $table->string('Cardiopatia',2);
            $table->string('Tuberculosis',2);
            $table->string('Neuropatia',2);
            $table->string('InfeccionesUrinarias',2);
            $table->string('ViolenciaInrtraFamiliar',2);
            $table->string('TipoSangre',5);
            $table->string('Quirurgicos',45)->nullable();
            $table->string('Fuma',2);
            $table->string('BebidasAlcoholicas',2);
            $table->string('ConsumoDrogas',2);
            $table->string('AntecedentesVacunas',2);
            $table->string('DosisVacuna',10)->nullable();
            $table->date('FechaUltimaDosis')->nullable();
            $table->string('SR',2);
            $table->string('OtrosAntecedentes',75)->nullable();
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
        Schema::dropIfExists('antecedentesmedicos');
    }
}
