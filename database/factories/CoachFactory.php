<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Coach;
use Faker\Generator as Faker;

$factory->define(Coach::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'language' => $faker->languageCode,
        'country' => $faker->countryCode
    ];
});
