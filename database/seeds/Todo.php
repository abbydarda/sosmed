<?php

use Illuminate\Database\Seeder;

class Todo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $albums = factory(\App\Todo::class, 2)->create();

    }
}
