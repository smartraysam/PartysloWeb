<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->randomElement($array = array ('Music','Festival','Art','Club','Comedy', 'Sports','Theatre','Promotion','Other')),
    ];
});