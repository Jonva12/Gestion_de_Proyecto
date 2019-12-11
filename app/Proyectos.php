<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
   protected $table = 'proyectos';

   public function empleado()
    {
        return $this->belongsTo('App\Empleados', 'responsable');
    }

    public function empleados()
    {
        return $this->belongsToMany('App\Empleados')->withpivot('fechainicio','fechafin');
    }
}
