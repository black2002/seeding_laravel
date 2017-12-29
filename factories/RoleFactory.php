<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Role::class, function (Faker $faker) {
    $arrayRole = ['User','Admin','Moder','Guest'];
    return [
'role'=>$faker=$arrayRole[rand(0,3)]
    ];
});
