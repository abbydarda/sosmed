<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'postId'=> function(){
           return factory(App\Post::Class)->create()->id;
        },
        'userId'=>function(){
           return factory(App\User::Class)->create()->id;
        },
        'body'=>$faker->text
    ];
});
