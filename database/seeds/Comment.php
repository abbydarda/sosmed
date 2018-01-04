<?php

use Illuminate\Database\Seeder;

class Comment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $albums = factory(\App\Comment::class, 2)->create();

    }
}
