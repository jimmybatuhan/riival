<?php

namespace App\Models;

use App\Models\Coach;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
{
    public function coaches(): MorphToMany
    {
        return $this->morphedByMany(Coach::class, 'taggable');
    }

    public function courses(): MorphToMany
    {
        return $this->morphedByMany(Course::class, 'taggable');
    }

    public function lessons(): MorphToMany
    {
        return $this->morphedByMany(Lesson::class, 'taggable');
    }
}
