<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConserjeriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conserjerias', function (Blueprint $table) {
            $table->increments('idConsejerias');
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
        Schema::dropIfExists('conserjerias');
    }
}
