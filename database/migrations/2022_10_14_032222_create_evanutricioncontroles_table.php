<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvanutricioncontrolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evanutricioncontroles', function (Blueprint $table) {
            $table->increments('idEvaNutricionControles');
            $table->decimal('Peso',5, 2);
            $table->string('GananciaPeso',15);
            $table->string('Acciones',150);
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
        Schema::dropIfExists('evanutricioncontroles');
    }
}
