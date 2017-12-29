<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Country::class, function (Faker $faker) {

    $arrayValues = ['Belarus','Ukraine','USA','Russia'];
    return [
        'country'=>$arrayValues[rand(0,3)],
        'user_id'=>rand(0,49)
    ];
});
