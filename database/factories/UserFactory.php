<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Task;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt("123456"),
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'details' => $faker->sentence,
        'created_by' => rand(1, 10)
    ];
});
