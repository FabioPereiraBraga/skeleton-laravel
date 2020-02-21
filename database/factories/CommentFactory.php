<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entyties\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id'=>rand(1, 100),
        'description'=>$faker->sentence()
    ];
});
