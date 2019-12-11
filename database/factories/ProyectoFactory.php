<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proyectos;
use Faker\Generator as Faker;

$factory->define(Proyectos::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstname,
        'titulo' => $faker->lastname,
        'fechainicio' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
        'fechafin' => $faker->dateTimeBetween($startDate = 'now', $endDate = 'now', $timezone = null),
        'horasestimadas' => $faker->numberBetween($min = 100, $max = 900)
    ];
});
