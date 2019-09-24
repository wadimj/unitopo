<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Geography\Place::class, function (Faker $faker) {
    return [
        'uuid' => \Ramsey\Uuid\Uuid::uuid4(),
        'name' => $faker->company,
        'geo' => new \Grimzy\LaravelMysqlSpatial\Types\Point(
            $faker->latitude, $faker->longitude
        )
    ];
});
