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
            $table->string('Celular', 15)->nullable();
            $table->string('Telefono', 15)->nullable();
            $table->string('Direccion', 80);
            $table->string('Cargo', 45);
            $table->date('FechaNacimiento');

            $table->string('EstadoCivil',7);
            $table->string('TipoSanguineo',5);
            
            $table->string('NivelAcademico', 30)->nullable();
            
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
        Schema::dropIfExists('personales');
    }
}
