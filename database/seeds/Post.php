<?php

use Illuminate\Database\Seeder;

class Post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $albums = factory(\App\Post::class, 2)->create();

    }
}
