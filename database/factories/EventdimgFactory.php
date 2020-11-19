<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Eventimg;
use Faker\Generator as Faker;

$factory->define(Eventimg::class, function (Faker $faker) {
    return [
        'event_id' => $faker->numberBetween($min = 1, $max = 50),
        'image' => $faker->randomElement($array = array('https://blogmedia.evbstatic.com/wp-content/uploads/wpmulti/sites/3/2020/05/DAYBREAKER_nyc_sasha_1010_1505.jpg',
            'https://cached.imagescaler.hbpl.co.uk/resize/scaleHeight/815/cached.offlinehbpl.hbpl.co.uk/news/OMC/BUMBLECHRISTMAS-201912130457283.jpg'
            , 'https://mainvibes.com/wp-content/uploads/2020/05/Party.jpeg',
            'https://seda.college/wp-content/uploads/party.jpg',
            'https://img.freepik.com/free-photo/people-dance-floor_106386-142.jpg?size=626&ext=jpg',
            'https://media-cdn.tripadvisor.com/media/photo-s/06/36/30/cf/club-med-bali.jpg',
            'https://www.largolimousineservice.com/uploads/4/5/9/7/45978821/2719387_orig.jpg', 'https://media.timeout.com/images/105284343/image.jpg',
            'https://static01.nyt.com/images/2012/02/17/us/17BCCulture/17BCCulture-articleLarge.jpg')),
    ];
});