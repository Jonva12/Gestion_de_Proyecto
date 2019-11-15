<?php

use Illuminate\Database\Seeder;

class departamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 3; $i++){
          DB::table('departamentos')->insert([
            'nombre' => 'nombreDepartamento'.($i+1),
          ]);
        }
    }
}
