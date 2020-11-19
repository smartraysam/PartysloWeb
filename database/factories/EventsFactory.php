<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'owner' => $faker->numberBetween($min = 1, $max = 1),
        'djlist_id' => $faker->numberBetween($min = 1, $max = 60),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'ticketfee' => $faker->numberBetween($min = 50, $max = 500),
        'category' => $faker->randomElement($array = array('Music', 'Festival', 'Art', 'Club', 'Comedy', 'Sports', 'Theatre', 'Promotion', 'Other')), // 'b',
        'start_date' => $faker->date($format = 'Y-m-d', $max = 'now'), // '1979-06-09',
        'end_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'start_time' => $faker->date($format = 'H:i:s', $max = 'now'),
        'end_time' => $faker->date($format = 'H:i:s', $max = 'now'),
        'venue' => $faker->firstNameMale,
        'address' => $faker->address,
        'address_latitude' => $faker->latitude($min = -90, $max = 90), // 77.147489
        'address_longitude' => $faker->longitude($min = -180, $max = 180), // 86.211205
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'organizers' => $faker->name,
        'organizerlink' => $faker->url,
    ];
});