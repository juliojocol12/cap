<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->integer('idPersonal', true);
            $table->string('Nombre', 45);
            $table->string('CUI', 15);
            $table->string('Telefono', 15);
            $table->string('Direccion', 45);
            $table->string('Cargo', 30);
            $table->date('FechaNacimiento');
            $table->string('NivelAcademico', 30)->nullable();
            $table->string('CorreoElectronico', 20)->nullable();
            $table->string('Observaciones', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personals');
    }
}
