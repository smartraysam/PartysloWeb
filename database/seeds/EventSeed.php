<?php

use Illuminate\Database\Seeder;

class EventSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Event::class, 200)->create()->each(function ($event) {
            $event->Events()->save(factory(App\Eventstat::class)->make());
        });
    }
}