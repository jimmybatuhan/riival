<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];
    protected $appends = ['video_duration', 'video_link'];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function getVideoLinkAttribute(): string
    {
        return config('vimeo.player_link') . "/" . $this->video_id;
    }

    public function getVideoDurationAttribute(): string
    {
        $minutes = $this->duration % 60;
        $hours = ($this->duration - $minutes) / 60;

        return $hours . ":" . sprintf("%02d", $minutes);
    }
}
