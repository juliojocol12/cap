<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamengeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examengenerales', function (Blueprint $table) {
            $table->increments('idExamenGenerales');
            $table->string('Anemia',2);
            $table->string('DescripcionAnemia',100)->nullable();
            $table->String('ExamenCardioPulmonar',45)->nullable();
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
        Schema::dropIfExists('examengenerales');
    }
}
