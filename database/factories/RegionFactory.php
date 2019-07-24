<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Topo\Region::class, function (Faker $faker) {
    $randomType = \App\Models\Topo\Region::ALLOWED_TYPES;
    shuffle($randomType);

    return [
        'name' => $faker->words(2, true),
        'description' => $faker->text,
        'type' => $randomType[0]
    ];
});
