<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personales', function (Blueprint $table) {
            $table->increments('idPersonal', true);
            $table->string('Nombre', 45);
            $table->string('CUI', 15)->unique();
            $table->string('Telefono', 15);
            $table->string('Direccion', 45);
            $table->string('Cargo', 30);
            $table->date('FechaNacimiento');
            $table->string('NivelAcademico', 30)->nullable();
            $table->string('CorreoElectronico', 20)->nullable();
            $table->string('Observaciones', 50)->nullable();
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
        Schema::dropIfExists('personales');
    }
}
