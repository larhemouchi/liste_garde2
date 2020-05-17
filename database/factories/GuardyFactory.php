<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guardy;
use Faker\Generator as Faker;

$factory->define(Guardy::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
