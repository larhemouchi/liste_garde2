<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Roly;
use Faker\Generator as Faker;

$factory->define(Roly::class, function (Faker $faker) {
    return [
        'name' => $faker->name,

    ];
});
