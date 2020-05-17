<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Plage;
use Faker\Generator as Faker;

$factory->define(Plage::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
