<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Matiere::class, function (Faker $faker) {
    return [
        'libelle' => $faker->word,
        'coeficient' => $faker->word,
    ];
});
