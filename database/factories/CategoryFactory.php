<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array('Hardcore /Hard Techno', 'Drum & Bass', 'Hard Dance', 'Techno', 'Dubstep', 'Psy-Trance', 'Trance', 'Trap',
            'Electronica', 'Minimal', 'Electro House', 'Progressive House', 'Tech House', 'House', 'Breaks', 'Indie Dance/ Nu Disco',
            'Open Format', 'Hip-Hop ', 'Chill Out', 'Reggae /Dub', 'Funk /R & B', 'Other')),
    ];
});