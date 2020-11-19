<?php

use App\Eventimg;
use Illuminate\Database\Seeder;

class EventImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Eventimg::class, 400)->create();
    }
}