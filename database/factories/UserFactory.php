<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'nom' => $faker->word,
        'prenom' => $faker->word,
        'age' => $faker->word,
        'numero' => $faker->word,
        'role' => $faker->word,
        'adresse' => $faker->word,
        'telephone' => $faker->word,
        'email' => $faker->safeEmail,
    ];
});
