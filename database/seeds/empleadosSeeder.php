<?php

use Illuminate\Database\Seeder;

class empleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
          DB::table('empleados')->insert([
            'nombre' => 'nombreEmpleado'.($i+1),
            'apellido' => 'apellidoApellido'.($i+1),
            'email' => 'email@prueba.com',
            'telefono' => random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9).random_int(1,9),
          ]);
        }
    }
}
