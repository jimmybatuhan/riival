<?php

namespace App\Models;

use App\Models\CoachProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];

    public function coaches(): HasMany
    {
        return $this->hasMany(CoachProfile::class);
    }
}
