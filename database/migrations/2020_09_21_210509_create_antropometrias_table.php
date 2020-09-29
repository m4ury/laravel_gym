<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntropometriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antropometrias', function (Blueprint $table) {
            $table->id();
            $table->unsignedDouble('triceps');
            $table->unsignedDouble('subescapular');
            $table->unsignedDouble('suprailiaco');
            $table->unsignedDouble('cuadriceps');
            $table->unsignedDouble('pantorrilla');
            $table->unsignedDouble('abdominal');
            $table->unsignedDouble('porcentaje_grasa')->nullable();
            $table->unsignedDouble('peso_graso')->nullable();
            $table->unsignedDouble('peso_magro')->nullable();
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
        Schema::dropIfExists('antropometrias');
    }
}
