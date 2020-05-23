<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Servicy;
use Faker\Generator as Faker;

$factory->define(Servicy::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'order' => $faker->unique()->randomDigit,
    ];
});
