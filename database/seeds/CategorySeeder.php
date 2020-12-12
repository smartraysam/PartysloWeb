<?php

use Illuminate\Database\Seeder;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(array(
            array(
                'name' => 'Hardcore /Hard Techno',
            ),
            array(
                'name' => 'Drum & Bass',
            ),
            array(
                'name' => 'Hard Dance',
            ),
            array(
                'name' => 'Techno',
            ),
            array(
                'name' => 'Dubstep',
            ),
            array(
                'name' => 'Psy-Trance',
            ),
            array(
                'name' => 'Trance',
            ),

            array(
                'name' => 'Trap',
            ),
            array(
                'name' => 'Electronica',
            ),
            array(
                'name' => 'Minimal',
            ),
            array(
                'name' => 'Electro House',
            ),
            array(
                'name' => 'Progressive House',
            ),
            array(
                'name' => 'Tech House',
            ),
            array(
                'name' => 'House',
            ),
            array(
                'name' => 'Breaks',
            ),
            array(
                'name' => 'Indie Dance/ Nu Disco',
            ),
            array(
                'name' => 'Open Format',
            ),

            array(
                'name' => 'Hip-Hop ',
            ),
            array(
                'name' => 'Chill Out',
            ),
            array(
                'name' => 'Reggae /Dub',
            ),
            array(
                'name' => 'Funk /R & B',
            ),
            array(
                'name' => 'Other',
            ),

        ));
    }
}