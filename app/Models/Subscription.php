<?php

namespace App\Models;

use App\Models\PaymentHistory;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Subscription extends Model
{
    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];

    public function paymentHistory(): HasMany
    {
        return $this->hasMany(PaymentHistory::class);
    }

    public function customer(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
