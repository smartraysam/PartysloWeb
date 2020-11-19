<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Eventdjs;
use Faker\Generator as Faker;

$factory->define(Eventdjs::class, function (Faker $faker) {
    return [
        'djlist_id' => $faker->numberBetween($min = 1, $max = 250),
        'event_id' => $faker->numberBetween($min = 1, $max = 50),
    ];
});