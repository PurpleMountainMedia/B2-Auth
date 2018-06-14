<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class OrganisationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        factory(App\Organisation::class, 50)->create()->each(function ($org) use ($faker) {
            $org->users()->save(factory(App\User::class)->make(), ['default' => $faker->boolean]);
        });
    }
}
