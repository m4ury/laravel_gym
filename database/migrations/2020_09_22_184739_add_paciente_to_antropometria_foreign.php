<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPacienteToAntropometriaForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('antropometrias', function (Blueprint $table) {
            $table->unsignedBigInteger('paciente_id')->nullable();
        });

        Schema::table('antropometrias', function (Blueprint $table) {
            $table->foreign('paciente_id')->references('id')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('antropometrias', function (Blueprint $table) {
            //
        });
    }
}
