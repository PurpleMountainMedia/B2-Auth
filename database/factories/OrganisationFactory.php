<?php

use Faker\Generator as Faker;
use App\User;
use App\Organisation;

$types = Organisation::$types;

$factory->define(App\Organisation::class, function (Faker $faker) use ($types) {
    return [
        'name' => $faker->company,
        'type' => $types[array_rand($types, 1)],
        'created_by' => function (array $organisation) use ($faker){
            $user = factory(App\User::class)->create();
            return $user->id;
        }
    ];
});

$factory->afterCreating(App\Organisation::class, function ($organisation, $faker) {
    $user = User::find($organisation->created_by);
    if ($user) {
        $user->organisations()->attach($organisation->id, ['default' => $faker->boolean]);
        $user->assignRole('organisation admin');
    }
});
