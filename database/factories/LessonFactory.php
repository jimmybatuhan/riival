<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course;
use App\Models\Lesson;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'course_id' => factory(Course::class),
        'title' => $faker->catchPhrase,
        'description' => $faker->paragraph,
        'video_id' => $faker->randomNumber($nbDigits = 8),
        'duration' => $faker->randomNumber($nbDigits = 3),
    ];
});
