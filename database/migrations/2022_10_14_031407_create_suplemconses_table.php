<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuplemconsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suplemconses', function (Blueprint $table) {
            $table->increments('idSupleMConses');
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
        Schema::dropIfExists('suplemconses');
    }
}
