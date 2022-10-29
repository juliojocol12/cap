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
            $table->string('AsmaBronquial',2)->nullable();
            $table->string('HipertensionArterial',2)->nullable();
            $table->string('Cancer',2)->nullable();
            $table->string('ITS',2)->nullable();
            $table->string('Chagas',2)->nullable();
            $table->string('TomaMedicamentos',2)->nullable();
            $table->string('TrastornoPiscoSocial',2)->nullable();
            $table->string('ViolenciaGenero',2)->nullable();
            $table->string('Diabetes',2)->nullable();
            $table->string('Cardiopatia',2)->nullable();
            $table->string('Tuberculosis',2)->nullable();
            $table->string('Neuropatia',2)->nullable();
            $table->string('InfeccionesUrinarias',2)->nullable();
            $table->string('ViolenciaInrtraFamiliar',2)->nullable();
            $table->string('TipoSangre',5)->nullable();
            $table->string('Quirurgicos',45);
            $table->string('Fuma',2)->nullable();
            $table->string('BebidasAlcoholicas',2)->nullable();
            $table->string('ConsumoDrogas',2)->nullable();
            $table->string('AntecedentesVacunas',2)->nullable();
            $table->string('DosisVacuna',2)->nullable();
            $table->date('FechaUltimaDosis');
            $table->string('SR',2)->nullable();
            $table->string('OtrosAntecedentes',75);
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
