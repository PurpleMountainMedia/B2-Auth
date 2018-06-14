<?php

use Faker\Generator as Faker;

$factory->define(App\Organisation::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'type' => 'School',
        'created_by' => function (array $organisation) use ($faker){
            $user = factory(App\User::class)->create();
            return $user->id;
        }
    ];
});
