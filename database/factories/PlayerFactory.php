<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Player::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'answers' => $faker->numberBetween(0,100),
        'points' => $faker->numberBetween(0,1000),
    ];
});
