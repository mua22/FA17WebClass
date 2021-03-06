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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence(4),
        'body' => $faker->realText(500,2),
        'user_id' => rand(1,40),

    ];
});
$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'comment' => $faker->sentence(5),

    ];
});
