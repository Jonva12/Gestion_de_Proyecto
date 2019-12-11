<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table = 'departamentos';

    public function empleados()
    {
        return $this->hasMany('App\Empleados', 'departamento_id');
    }

    public function empleado()
    {
        return $this->belongsTo('App\Empleados', 'jefe_id');
    }
}
