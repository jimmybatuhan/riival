<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CoachProfile;
use App\Models\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase,
        'description' => $faker->paragraph,
        'coach_profile_id' => factory(CoachProfile::class),
        'language' =>  $faker->languageCode,
    ];
});
