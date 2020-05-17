<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Spec;
use Faker\Generator as Faker;

$factory->define(Spec::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
