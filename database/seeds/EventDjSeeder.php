<?php

use App\Eventdjs;
use Illuminate\Database\Seeder;

class EventDjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Eventdjs::class, 400)->create();
    }
}