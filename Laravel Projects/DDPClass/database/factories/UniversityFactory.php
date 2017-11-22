<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 11/21/2017
 * Time: 12:30 PM
 */

$factory->define(App\University::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->company,
        'ranking'=> rand(1,100)
    ];
});