<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Geography\Polygon::class, function (Faker $faker) {

    $polyStrings = [];

    for($x=0; $x<10; $x++){
        $first = new \Grimzy\LaravelMysqlSpatial\Types\Point($faker->latitude, $faker->longitude);
        $polyStrings[] = new \Grimzy\LaravelMysqlSpatial\Types\LineString([
            $first,
            new \Grimzy\LaravelMysqlSpatial\Types\Point($faker->latitude, $faker->longitude),
            new \Grimzy\LaravelMysqlSpatial\Types\Point($faker->latitude, $faker->longitude),
            new \Grimzy\LaravelMysqlSpatial\Types\Point($faker->latitude, $faker->longitude),
            new \Grimzy\LaravelMysqlSpatial\Types\Point($faker->latitude, $faker->longitude),
            new \Grimzy\LaravelMysqlSpatial\Types\Point($faker->latitude, $faker->longitude),
            new \Grimzy\LaravelMysqlSpatial\Types\Point($faker->latitude, $faker->longitude),
            new \Grimzy\LaravelMysqlSpatial\Types\Point($faker->latitude, $faker->longitude),
            $first
        ]);
    }

    return [
        'uuid' => \Ramsey\Uuid\Uuid::uuid4(),
        'name' => $faker->company,
        'geo' => new \Grimzy\LaravelMysqlSpatial\Types\Polygon($polyStrings)
    ];
});
