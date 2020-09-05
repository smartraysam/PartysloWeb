<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Eventstat;
use Faker\Generator as Faker;


$factory->define(Eventstat::class, function (Faker $faker) {
    return [
        // 'event_id'->factory(App\Event)->create()->id,
        'going' => $faker->numberBetween($min = 1, $max = 60),
        'maybe' => $faker->numberBetween($min = 1, $max = 60),
        'notgoing' => $faker->numberBetween($min = 1, $max = 60),
        'share' => $faker->numberBetween($min = 1, $max = 60),
        'like' => $faker->numberBetween($min = 1, $max = 60),
        'comments' => $faker->numberBetween($min = 1, $max = 60), // 77.147489

    ];
});