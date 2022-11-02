<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFcevaluacionpospartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fcevaluacionpospartos', function (Blueprint $table) {
            $table->increments('idFCEvaluacionPosparto');

            $table->unsignedInteger("FCPrenatalPostparto_id");
            $table->foreign('FCPrenatalPostparto_id')->references('idFCPrenatalPostpartos')->on('fcprenatalpostpartos');

            $table->date('FechaEvaluacionPosparto');

            $table->unsignedInteger('DatosPersonalesPacientes_id');
            $table->foreign('DatosPersonalesPacientes_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');

            $table->string('HemorragiaVaginal', 2);
            $table->string('DolordeCabeza', 2);
            $table->string('VisionBorrosa', 2);
            $table->string('Convulsion', 2);
            $table->string('DolorAbdominal', 2);
            $table->string('PresionArterialSignos', 2);
            $table->string('Fiebre', 2);
            $table->string('Coagulos', 2);

            $table->string('RegistroReferencia',300);

            $table->string("NombreServicio",45);
            $table->string("DiasDespuesParto",6);
            $table->unsignedInteger('EstablecimientoSalud_id');
            $table->foreign('EstablecimientoSalud_id')->references('idEstablecimientoSaludos')->on('establecimientosaludos');
            
            $table->unsignedInteger('Infantes_id');
            $table->foreign('Infantes_id')->references('idInfantes')->on('infantes');

            $table->unsignedInteger('Personal_idD');
            $table->foreign('Personal_idD')->references('idPersonal')->on('personales');
            $table->string("HeridaOperatoria",45);
            $table->string("InvolucionUterina",25);
            $table->String("PresionArterial",20);
            $table->String("FrecuenciaCardiaca",20);
            $table->String("Temperatura",10);
            $table->string("ExamenMamas",75);
            $table->string("ExamenGinecologico",300);
            $table->string("LactanciaMaterna",2);
            $table->string("PorqueNoLactanciaMaterna",45)->nullable();
            $table->string("Diagnostico",200);
            $table->string("ConductaTratamiento",200);			
            $table->unsignedBigInteger('Usuario_id');
            $table->foreign('Usuario_id')->references('id')->on('users');
            
            $table->string('SulfatoFerroso',2);
            $table->string('AcidoFolico',2);
            $table->string('OtroMedicamento',2);
            $table->string('Tdap',2);
            $table->string('ConsejeriaPF_Posparto',2);
            $table->string('ConsejeriaLactanciaAlimentacion',2);
            $table->string('ConsejeriaLactanciaMujerVIH',2);
            $table->string('ConsejeriaMujerVIH',2);

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
        Schema::dropIfExists('fcevaluacionpospartos');
    }
}
