<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanNutri extends Model
{
    public function paciente()
    {
        return $this->belongsTo(paciente::class);
    }
}
