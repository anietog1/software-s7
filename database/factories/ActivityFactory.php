<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Activity;
use Faker\Generator as Faker;

$factory->define(Activity::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'description' => $faker->boolean() ? $faker->paragraph(2) : null,
        'percentage' => $faker->randomFloat(2, 0, 100),
        'score' => $faker->boolean() ? $faker->randomFloat(2, 0, 5) : null
    ];
});
