<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
      'userId'=> function(){
         return factory(App\User::Class)->create()->id;
      },
      'title'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
      'body'=>$faker->text
    ];
});
