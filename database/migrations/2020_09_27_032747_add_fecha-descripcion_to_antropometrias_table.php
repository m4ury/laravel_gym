<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFechaDescripcionToAntropometriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('antropometrias', function (Blueprint $table) {
            $table->string('descripcion')->after('id');
            $table->date('fecha_examen')->after('abdominal');
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
