<?php

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
      'userId'=> function(){
        return factory(App\User::Class)->create()->id;
      },
      'title'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
      'completed'=>$faker->boolean
    ];
});
