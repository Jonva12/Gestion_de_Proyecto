<?php

use Illuminate\Database\Seeder;
use App\Departamentos;

class departamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Departamentos::class, 3)->create();
    }
}
