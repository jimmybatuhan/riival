<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Coach;
use App\Models\CoachProfile;
use App\Models\Game;
use Faker\Generator as Faker;

$factory->define(CoachProfile::class, function (Faker $faker) {
    return [
        'in_game_name' => $faker->userName,
        'coach_id' => factory(Coach::class),
        'game_id' => Game::inRandomOrder()->first()->id,
    ];
});
