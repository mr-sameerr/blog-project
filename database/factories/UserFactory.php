<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$j9WkqJZEIWbujP16K/vpPOwtIK50VeSwoDVbbbBPxA7yOfts8xyzW', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->state(User::class, 'post-mr-sameerr', function (Faker $faker) {
    return [
        'name'  =>  'admin',
        'email' =>  'admin@gmail.com',
        'is_admin'  =>  1
    ];
});
