<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichamspasriegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichamspasriegos', function (Blueprint $table) {
            $table->increments('idFichamspasriegos');
            $table->string('RegistroNo',10);

            $table->unsignedInteger
            ('DatosPersonalesPacientes_id');
            $table->foreign('DatosPersonalesPacientes_id')->references('idDatosPersonalesPacientes')->on('datospersonalespacientes');

            $table->unsignedInteger('FCPrenatalPostparto_id');
            $table->foreign('FCPrenatalPostparto_id')->references('idFCPrenatalPostpartos')->on('fcprenatalpostpartos');

            $table->string('Muertefetal',2);
            $table->string('Ancedentesaborto',2);
            $table->string('Antecedentegestas',2);
            $table->string('Pesocinco',2);
            $table->string('Pesonueve',2);
            $table->string('Antecedentehipertension',2);
            $table->string('Cirugiasprevias',2);
            $table->string('Diagnosticosospecha',2);
            $table->string('Menosveinte',2);
            $table->string('Mastreinta',2);
            $table->string('Pacienterh',2);
            $table->string('Hemorragia',2);
            $table->string('VIH',2);
            $table->string('Presionarterial',2);
            $table->string('Anemiaclinica',2);
            $table->string('Desnutricion',2);
            $table->string('Dolorabdominal',2);
            $table->string('Sintomatologia',2);
            $table->string('Ictericia',2);
            $table->string('Diabetes',2);
            $table->string('Enfermedadrenal',2);
            $table->string('Enfermerdadcorazon',2);
            $table->string('Hipertension',2);
            $table->string('Consumodrogas',2);
            $table->string('Cualquierenfermedad',2);
            $table->string('Especifiquefichamspasriegos', 250)->nullable();

            $table->string('Refirio',100)->nullable();
            $table->date('Fecha',100)->nullable();
            $table->string('Nombre',40)->nullable();

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
        Schema::dropIfExists('fichamspasriegos');
    }
}
