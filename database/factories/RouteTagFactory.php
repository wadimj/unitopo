<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Topo\RouteTag::class, function (Faker $faker) {
    return [
        'k' => $faker->word,
        'v' => $faker->word
    ];
});
