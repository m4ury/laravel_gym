<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antropometria extends Model
{
    protected $fillable = ['descripcion', 'triceps', 'subescapular', 'suprailiaco', 'cuadriceps', 'pantorrilla', 'abdominal',
        'porcentaje_grasa', 'peso_graso', 'peso_magro', 'fecha_examen', 'paciente_id', 'peso_actual'];

    public function paciente()
    {
        return $this->belongsTo(paciente::class);
    }

    public function porcent_grasa()
    {
        if ($this->paciente->sexo == 'masculino') {
            $result = $this->triceps + $this->subescapular + $this->suprailiaco + $this->cuadriceps + $this->pantorrilla + $this->abdominal;
            return $result * 0.1051 + 2.585;
        } elseif ($this->paciente->sexo == 'femenino') {
            $result = $this->triceps + $this->subescapular + $this->suprailiaco + $this->cuadriceps + $this->pantorrilla + $this->abdominal;
            return $result * 0.1558 + 3.58;
        }
    }
}


