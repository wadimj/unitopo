<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Geometry\Fototopo;
use Faker\Generator as Faker;
use Grimzy\LaravelMysqlSpatial\Types\Point;

$factory->define(Fototopo::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
        'file' => 'test/f_' . random_int(1,5) . '.jpg',
        'geo_point' => new Point($faker->latitude, $faker->longitude),
        'geo_orientation' => random_int(0, 359)
    ];
});
