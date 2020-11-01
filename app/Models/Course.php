<?php

namespace App\Models;

use App\Models\Coach;
use App\Models\CoachProfile;
use App\Models\Lesson;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Course extends Model
{
    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];

    public function coach(): HasOneThrough
    {
        return $this->hasOneThrough(Coach::class, CoachProfile::class);
    }

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
