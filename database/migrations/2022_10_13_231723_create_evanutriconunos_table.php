<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvanutriconunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evanutriconunos', function (Blueprint $table) {
            $table->increments('idEvaNutriConUnos');
            $table->decimal('Peso',5,2);
            $table->string('Talla',45);
            $table->string('CMB',45);
            $table->string('Diagnostico',45);
            $table->string('IMC_Diagnostico',45);
            $table->string('Acciones')->nullable();
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
        Schema::dropIfExists('evanutriconunos');
    }
}
