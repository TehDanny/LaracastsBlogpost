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

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => 'Top 10 reasons why Kim Kardashian has a fat ass',
        'body' => $faker->text,
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'post_id' => 1,
        'user_id' => 1,
    ];
});

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => 'John Doe',
        'email' => 'john@doe.com',
        'password' => $faker->password,
    ];
});