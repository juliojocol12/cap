<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosfamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosfamiliares', function (Blueprint $table) {
            $table->increments('idDatosFamiliares');
            $table->string('NombresFamiliar',25);
            $table->string('ApellidosFamiliar',25);
            $table->string('CUI', 15)->unique();
            $table->string('EstadoCivil',7);
            $table->string('ProfesionOficio',25);
            $table->string('Domicilio',45);
            $table->string('TelefonoFamiliar',12)->nullable();
            $table->string('CelularFamiliar',12);

            $table->string('AntecedentesMedicos',300)->nullable();
            $table->string('TipoSanguineo',5);


            $table->unsignedBigInteger('Usuario_id')->nullable();
            $table->foreign('Usuario_id')->references('id')->on('users');

            $table->string('Estado',2);
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
        Schema::dropIfExists('datosfamiliares');
    }
}
