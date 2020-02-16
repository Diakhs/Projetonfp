<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Salle::class, function (Faker $faker) {
    return [
        'numero' => $faker->randomNumber(),
        'intitule' => $faker->word,
    ];
});
