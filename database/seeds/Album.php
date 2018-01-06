<?php

use Illuminate\Database\Seeder;

class Album extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $albums = factory(\App\Album::class, 2)->create();
    }
}
