<?php

use Illuminate\Database\Seeder;
use App\Proyectos;

class proyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Proyectos::class, 5)->create();
    }
}
