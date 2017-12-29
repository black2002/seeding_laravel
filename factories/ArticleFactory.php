<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
        'text'=>$faker=str_random(100),
        'head'=>$faker=str_random(20),
        'user_id'=>$faker=rand(0,49),

    ];
});
