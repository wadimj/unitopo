<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Content\Article::class, function (Faker $faker) {
    $paragraphs = random_int(1,3);
    $content = '';
    for ($i = 1; $i <= $paragraphs; $i++){
        $content .= '<p>' .$faker->paragraphs(random_int(2, 10), true). '</p>';
    }

    return [
        'title' => $faker->sentence,
        'content' => $content,
        'order' => 1,
        'type' => \App\Models\Content\Article::TYPE_DEFAULT,
    ];
});
