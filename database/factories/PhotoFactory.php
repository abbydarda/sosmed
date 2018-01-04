<?php

use Faker\Generator as Faker;

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
      'albumId'=> function(){
         return factory(App\Album::Class)->create()->id;
      },
      'title'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
      'url'=>$faker->url,
      'thumbnailUrl'=>$faker->url
    ];
});
