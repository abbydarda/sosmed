<?php

use Illuminate\Database\Seeder;

class Photo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $albums = factory(\App\Photo::class, 2)->create();

    }
}
