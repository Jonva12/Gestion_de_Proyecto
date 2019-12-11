<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['nombre','apellido', 'email', 'telefono'];

    public function proyecto()
    {
        return $this->hasOne('App\Proyectos', 'responsable');
    }
}
