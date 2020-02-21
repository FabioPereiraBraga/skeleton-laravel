<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entyties\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
       'name'=>$faker->name,
       'age'=> rand(20,60)
    ];
});
