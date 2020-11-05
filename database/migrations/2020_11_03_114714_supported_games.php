<?php

use App\Models\Game;
use Illuminate\Database\Migrations\Migration;

class SupportedGames extends Migration
{
    public function up()
    {
        Game::create(['name' => 'Dota 2']);
        Game::create(['name' => 'Tekken 7']);
    }

    public function down()
    {
        Game::all()->each(function (Game $game) {
            $game->delete();
        });
    }
}
