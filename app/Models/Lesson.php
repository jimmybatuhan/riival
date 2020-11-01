<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Lesson extends Model
{
    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
