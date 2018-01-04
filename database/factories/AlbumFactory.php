<?php

use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {
    return [
        'userId'=> function(){
          return factory(App\User::class)->create()->id;
        },
        'title'=>$faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
