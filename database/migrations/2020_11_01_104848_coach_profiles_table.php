<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CoachProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('coach_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('coach_id')->constrained('coaches');
            $table->foreignId('game_id')->constrained('games');
            $table->string('in_game_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coach_profiles');
    }
}
