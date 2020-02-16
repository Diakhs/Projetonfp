<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Professeur::class, function (Faker $faker) {
    return [
        'matricule' => $faker->word,
        'users_id' => factory(App\User::class),
    ];
});
