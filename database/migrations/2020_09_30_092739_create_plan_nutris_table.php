<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanNutrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_nutris', function (Blueprint $table) {
            $table->id();
            $table->string('anaerobica');
            $table->string('aerobica');
            $table->unsignedDouble('promedio_dormido')->nullable();
            $table->string('grupo_sanguineo');
            $table->unsignedDouble('bmr')->nullable();
            $table->foreignId('paciente_id')->constrained()->nullable();
            $table->foreignId('actividad_fisica_id')->nullable()->constrained()->nullable();
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
        Schema::dropIfExists('plan_nutris');
    }
}
