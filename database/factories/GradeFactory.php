<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Topo\Grade::class, function (Faker $faker) {
    static $position = 1;

    return [
        'scale_id' => 1,
        'position' => $position,
        'value' => $position++ . '.' . $faker->randomLetter
    ];
});
