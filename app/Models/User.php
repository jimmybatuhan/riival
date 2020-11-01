<?php

namespace App\Models;

use App\Models\PaymentHistory;
use App\Models\Subscription;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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
