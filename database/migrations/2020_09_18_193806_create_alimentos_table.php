<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimentos', function (Blueprint $table) {
            $table->id();
            $table->string('alimento_nombre');
            $table->float('calorias')->nullable();
            $table->float('proteinas')->nullable();
            $table->float('carbohidratos')->nullable();
            $table->float('grasas')->nullable();
            $table->float('fibra')->nullable();
            $table->float('grasas_poli')->nullable();
            $table->float('grasas_mono')->nullable();
            $table->float('grasas_satur')->nullable();
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
        Schema::dropIfExists('alimentos');
    }
}
