<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entyties\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'author_id'=> rand(1, 100),
        'title'=> $faker->colorName,
        'description'=>$faker->sentence()
    ];
});
