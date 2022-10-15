<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignosysintomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signosysintomas', function (Blueprint $table) {
            $table->increments('idSignosySintomas');
            $table->string('HemorragiaVaginal', 2);
            $table->string('DolordeCabeza', 2);
            $table->string('VisionBorrosa', 2);
            $table->string('Convulsion', 2);
            $table->string('DolorAbdominal', 2);
            $table->string('PresionArterial', 2);
            $table->string('Fiebre', 2);
            $table->string('PresentacionesFetales', 2);
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
        Schema::dropIfExists('signosysintomas');
    }
}
