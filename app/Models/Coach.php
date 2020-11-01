<?php

namespace App\Models;

use App\Models\CoachProfile;
use app\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Coach extends Model
{
    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];

    public function gameProfiles(): HasMany
    {
        return $this->hasMany(CoachProfile::class);
    }

    public function courses(): HasManyThrough
    {
        return $this->hasManyThrough(Course::class, CoachProfile::class);
    }
}
