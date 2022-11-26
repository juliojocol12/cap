<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePueblosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pueblos', function (Blueprint $table) {
            $table->increments('idPueblo');
            $table->string('Nombre',15)->unique();

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
        Schema::dropIfExists('pueblos');
    }
}
