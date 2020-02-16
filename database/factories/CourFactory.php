<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Cour::class, function (Faker $faker) {
    return [
        'salles_id' => factory(App\Salle::class),
        'matieres_id' => factory(App\Matiere::class),
        'administrateurs_id' => factory(App\Administrateur::class),
        'rooms_id' => factory(App\Room::class),
        'professeurs_id' => factory(App\Professeur::class),
        'jour' => $faker->word,
        'heuredebut' => $faker->dateTime(),
        'heurefin' => $faker->dateTime(),
        'semestre' => $faker->word,
    ];
});
