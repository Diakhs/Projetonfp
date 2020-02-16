<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'niveaus_id' => factory(App\Niveau::class),
        'matricule' => $faker->word,
        'codeclasse' => $faker->word,
    ];
});
