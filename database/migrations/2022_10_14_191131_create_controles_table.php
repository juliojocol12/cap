<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controles', function (Blueprint $table) {
            $table->increments('idControles');
            $table->string('NoControl',15); 
            $table->string('SemanasEmbarazo',5);
            $table->date('FechaVisita');

            $table->unsignedInteger('DatosPersonalesPacientes_id');
            $table->foreign('DatosPersonalesPacientes_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');

            $table->unsignedInteger('FCPrenatalPostparto_id');
            $table->foreign('FCPrenatalPostparto_id')->references('idFCPrenatalPostpartos')->on('fcprenatalpostpartos');

            $table->date('FechaPosibleParto');
            $table->string('CircuferenciaBrazo',5)->nullable();

            $table->string('EvaluacionInicialRapida',2);
            $table->string('DescripcionEvaluacion',150)->nullable();

            $table->string('PresionArterial', 20);
            $table->string('Temperatura', 10);
            $table->string('RespiracionPorMinuto', 20);
            $table->string('FrecuenciaCardiacaMaternal', 20);

            $table->decimal('Pesolb',5,2);
            $table->string('Talla',5)->nullable();
            $table->string('CMB',5)->nullable();
            $table->string('Diagnostico',45)->nullable();
            $table->string('IMC_Diagnostico',45)->nullable();
            $table->string('Accionesicm',45)->nullable();

            $table->string('GananciaPeso',15)->nullable();
            $table->string('Accionesganancia',150)->nullable();

            $table->string('Anemia',2);
            $table->string('DescripcionAnemia',100)->nullable();
            $table->String('ExamenCardioPulmonar',45)->nullable();
            
            $table->string('ExamenMamas', 2)->nullable();
            $table->string('ObservacionAbdominal',25);
            $table->string('AlturaUterina',45)->nullable();
            $table->string('PresenciaMovimientoFetales',2)->nullable();
            $table->string('FrecuenciaCardiacaFetal',45)->nullable();
            $table->string('ManiobrasLeopold',45)->nullable();

            $table->string('TrazasSangreManchado',2);
            $table->string('DescripcionTrazasSangreManchado',45)->nullable();
            $table->string('EnfermedadesGinecologicos',2);
            $table->string('DescripcionEnfermedadesGinecologicos',45)->nullable();
            $table->string('FlujoVaginal',2);
            
            $table->string('PruebasEmbarazo', 2)->nullable();
            $table->string('DecripcionPruebasEmbarazo', 45)->nullable();
            $table->string('Hematologia', 2)->nullable();
            $table->string('DescripcionHematologia', 45)->nullable();
            $table->string('GrupoRH', 2)->nullable();
            $table->string('DescripcionGrupoRH', 45)->nullable();
            $table->string('Orina', 2);
            $table->string('DescripcionOrina', 45)->nullable();
            $table->string('Heces', 2)->nullable();
            $table->string('DescirpcionHeces', 45)->nullable();
            $table->string('GlicemiaAyunas', 2);
            $table->string('DescripcionGlicemiaAyunas', 45)->nullable();
            $table->string('VDLR', 2)->nullable();
            $table->string('DescripcionVDLR', 45)->nullable();
            $table->string('VIH', 2)->nullable();
            $table->string('DescipcionVIH', 45)->nullable();
            $table->string('TORCH', 2)->nullable();
            $table->string('DescripcionTORCH', 45)->nullable();
            $table->string('PapanicolaouIVAA', 2)->nullable();
            $table->string('DescripcionPapanicolaouIVAA', 45)->nullable();
            $table->string('HepatitisB', 2)->nullable();
            $table->string('DescripcionHepatitisB', 45)->nullable();
            $table->string('OtrosEstudios', 45);
            
            $table->string("SemanasEmbarazoFURAU",5);
            $table->string("ProblemasDetectados",45)->nullable();

            $table->string("SulfatoFerroso",30);
            $table->string("AcidoFolico",30);
            $table->string("VacunacionTdTdap",30);
            $table->string("VacunacionInfluenza",30);
            $table->string("OtrosTratamientos",30);
            $table->string("Referencia",30);

            
            $table->string('AlimentacionEmbarazo',2);
            $table->string('DescripcionAlimentacionEmbarazo',30)->nullable();
            $table->string('CuidadosPersonales', 2);
            $table->string('DescripcionCuidadosPersonales',30)->nullable();
            $table->string('SintomasComunes', 2);
            $table->string('DescipcionSintomasComunes',30)->nullable();
            $table->string('SenalesPeligro', 2);
            $table->string('DescripcionSenalesPeligro',30)->nullable();
            $table->string('ConsejeriaPrePostVIH', 2);
            $table->string('DescripcionConsejeriaPrePostVIH',30)->nullable();
            $table->string('PlanParto', 2);
            $table->string('DescrpcionPlanParto',30)->nullable();
            $table->string('PlanEmergencia', 2);
            $table->string('DescpcionPlanEmergencia',30)->nullable();
            $table->string('LactanciaMaterna', 2);
            $table->string('DescripcionLactanciaMaterna',30)->nullable();
            $table->string('ViolenciaSexual', 2);
            $table->string('DescipcionViolenciaSexual',30)->nullable();
            $table->string('MetodosPlanificcion', 2);
            $table->string('ImportanciaControlPos', 2);
            $table->string('VacunacionRecienNacido', 2);

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
        Schema::dropIfExists('controles');
    }
}
