<?php

use App\ActividadFisica;
use Illuminate\Database\Seeder;

class ActividadFisicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actividad = [
            ['descripcion' => 'Sedentario', 'factor' =>1.2, 'observacion' => 'Trabajo oficinista, cero actividad, etc'], ['descripcion' => 'Actividad ligera', 'factor' =>1.375, 'observacion' => 'Act. 1-3 veces /semana'],  ['descripcion' => 'Actividad moderada', 'factor' =>1.55, 'observacion' => 'Act. 3-5 veces / semana'], ['descripcion' => 'Actividad intensa', 'factor' =>1.725, 'observacion' => 'Act. 6-7 veces / semana'], ['descripcion' => 'Actividad muy intensa', 'factor' =>1.9, 'observacion' => 'Ejercicio 2 veces al día, ejercicios de gran intensidad, fuerza y potencia'],
            ];
            foreach ($actividad as $act){
            ActividadFisica::updateOrCreate($act);
        }
    }
}
