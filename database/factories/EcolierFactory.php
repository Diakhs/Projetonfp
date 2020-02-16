<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Ecolier::class, function (Faker $faker) {
    return [
        'users_id' => factory(App\User::class),
        'matricule' => $faker->word,
    ];
});
