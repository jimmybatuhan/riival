<?php

namespace App\Models;

use App\Models\CoachProfile;
use app\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coach extends Model
{
    use SoftDeletes;

    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];

    public function gameProfiles(): HasMany
    {
        return $this->hasMany(CoachProfile::class);
    }

    public function courses(): HasManyThrough
    {
        return $this->hasManyThrough(Course::class, CoachProfile::class);
    }

    public function gameProfile(int $game_id): CoachProfile
    {
        return CoachProfile::where('coach_id', $this->id)
            ->where('game_id', $game_id)->firstOrFail();
    }
}
