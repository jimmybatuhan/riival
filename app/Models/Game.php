<?php

namespace App\Models;

use App\Models\CoachProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Game extends Model
{
    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];

    public function coaches(): HasMany
    {
        return $this->hasMany(CoachProfile::class);
    }

    public function courses(): HasManyThrough
    {
        return $this->hasManyThrough(Course::class, CoachProfile::class);
    }

    public static function getGameByName(string $game_name): self
    {
        return self::where("name", $game_name)->firstOrfail();
    }
}
