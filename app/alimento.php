<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alimento extends Model
{
    protected $fillable = ['alimento_nombre', 'calorias', 'proteinas', 'carbohidratos', 'grasas', 'fibra', 'grasas_poli', 'grasas_mono', 'grasas_satur'];

    public function scopeSearch($query, $q)
    {
        if ($q)
            return $query->where('alimento_nombre', 'LIKE', "%$q%");
    }
}
