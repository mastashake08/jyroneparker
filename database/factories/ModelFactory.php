<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function ($faker) {
  return [
    'title' => $faker->sentence(mt_rand(3, 5)),
    'content' => 'test.ogv',
    'description' => $faker->paragraph($nbSentences = 6, $variableNbSentences = true),
    'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
    'premium' => false
  ];
});
