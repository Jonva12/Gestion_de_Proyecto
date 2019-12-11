<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEmpleadoProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados_proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empleados_id');
            $table->integer('proyectos_id');
            $table->date('fechainicio');
            $table->date('fechafin');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados_proyectos');
    }
}
