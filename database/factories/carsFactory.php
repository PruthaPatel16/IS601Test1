<?php

use Faker\Generator as Faker;


$factory->define(App\cars::class, function (Faker $faker) {
    return [
        'model' => $faker->randomElement($array = array ('S-MAX','civic','Galaxy','coupe')),
        'make' => $faker->randomElement($array = array ('ford','honda','toyota')),
        'year' => $faker->year,
    ];
});
