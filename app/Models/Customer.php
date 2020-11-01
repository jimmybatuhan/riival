<?php

namespace App\Models;

use App\Models\PaymentHistory;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];

    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    public function getActiveSubscriptionAttribute(): Subscription
    {
        return $this->subscriptions->where('is_active', true)->firstOrFail();
    }

    public function paymentHistory(): HasMany
    {
        return $this->hasMany(PaymentHistory::class);
    }
}
