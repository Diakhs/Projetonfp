<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Inscription::class, function (Faker $faker) {
    return [
        'anneescolaire' => $faker->dateTime(),
        'ecoliers_id' => factory(App\Ecolier::class),
        'rooms_id' => factory(App\Room::class),
    ];
});
