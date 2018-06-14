<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'product_updates_marketing' => $faker->boolean,
        'product_notifications_marketing' => $faker->boolean,
        'password' => bcrypt('password'), // secret
        'remember_token' => str_random(10),
    ];
});
