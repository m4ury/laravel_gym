<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    protected $fillable = ['edad', 'rut', 'nombres', 'apellido_paterno', 'apellido_materno', 'sexo', 'peso', 'estatura'];

    public function scopeSearch($query, $q)
    {
        if ($q)
            return $query->where('rut', 'LIKE', "%$q%")
                ->orWhere('nombres', 'LIKE', "%$q%")
                ->orWhere('apellido_paterno', 'LIKE', "%$q%")
                ->orWhere('apellido_materno', 'LIKE', "%$q%");
    }

    public function fullName()
    {
        return ucfirst($this->nombres . " " . $this->apellido_paterno . " " . $this->apellido_materno);
    }

    public function antropometrias()
    {
        return $this->hasMany(Antropometria::class);
    }

    public function planesNutri()
    {
        return $this->hasMany(PalnNutri::class);
    }
}
