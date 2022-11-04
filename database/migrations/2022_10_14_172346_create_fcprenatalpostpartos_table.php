<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFcprenatalpostpartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fcprenatalpostpartos', function (Blueprint $table) {
            $table->increments('idFCPrenatalPostpartos');
            $table->date('Fecha');
            
            $table->unsignedInteger('DatosPersonalesPacientes_id');
            $table->foreign('DatosPersonalesPacientes_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');

            $table->unsignedInteger('EstablecimientoSalud_id');
            $table->foreign('EstablecimientoSalud_id')->references('idEstablecimientoSaludos')->on('establecimientosaludos');

            $table->string('HemorragiaVaginal', 2);
            $table->string('DolordeCabeza', 2);
            $table->string('VisionBorrosa', 2);
            $table->string('Convulsion', 2);
            $table->string('DolorAbdominal', 2);
            $table->string('PresionArterial', 2);
            $table->string('Fiebre', 2);
            $table->string('PresentacionesFetales', 2);
            $table->string('RegistrodeReferencia',190)->nullable();
            $table->string('MotivoConsulta',20);
            $table->string('HistoriaEnfermedadActual',200);

            $table->date('FechaUltimaRegla')->nullable();
            $table->string('NoGestas',2)->nullable();
            $table->string('Partos',2)->nullable();
            $table->string('Aborto',2)->nullable();
            $table->string('AbortoConsecutivo',2)->nullable();
            $table->string('NoLIU',2);
            $table->string('NacidosVivos',2)->nullable();
            $table->string('NacidosMuertos',2)->nullable();
            $table->string('HijosVivos',2)->nullable();
            $table->string('HijosMuertos',2)->nullable();
            $table->string('NoCesareas',2)->nullable();
            $table->string('EmbarazoMultiples',2)->nullable();
            $table->date('FechaUltimoParto');
            $table->string('NacidosAntesOchoMeses',2)->nullable();
            $table->string('PreEclampsia',2)->nullable();
            $table->string('UltimoRNPesoCincolb',2)->nullable();
            $table->string('UltimoRNPesoSietelb',2)->nullable();
            $table->string('DeteccionCancerCervix',15)->nullable();
            $table->date('FechaDeteccionCancer')->nullable();
            $table->string('ResultadoNormal',2)->nullable();
            $table->string('MetodoPlanificacionFamiliar',2)->nullable();
            $table->string('CualMetodoPlanificacionF',45)->nullable();

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
        Schema::dropIfExists('fcprenatalpostpartos');
    }
}
