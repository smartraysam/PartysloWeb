<?php

use App\Eventstat;
use Illuminate\Database\Seeder;

class EventStatSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Eventstat::class, 200)->create();
    }
}
