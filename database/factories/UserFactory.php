<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'username' => $faker->username,
        'email' => $faker->unique()->safeEmail,
        'address' => [
          'street'=> $faker->streetAddress,
          'suite' => $faker->secondaryAddress,
          'city' => $faker->city,
          'zipcode' => $faker->postcode,
          'geo'=>[
            'lat'=> $faker->latitude,
            'lang'=> $faker->longitude
          ]
        ],
        'phone' => $faker->phoneNumber,
        'website' => $faker->domainName,
        'company' => [
          'name' => $faker->company,
          'catchPhrase' => $faker->catchPhrase,
          'bs' => $faker->bs
        ],
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
