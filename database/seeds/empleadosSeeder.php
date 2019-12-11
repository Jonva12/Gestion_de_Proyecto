<?php

use Illuminate\Database\Seeder;
use App\Empleados;

class empleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Empleados::class, 10)->create();
    }
}
