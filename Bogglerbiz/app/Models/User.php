<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Stripe\Plan;
use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, Billable, HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'location',
        'provider',
        'provider_id',
        'profile',
        'industrial',
        'role','ref','deleted_at', 'google_id', 'email_verified_at', 'session_id', 'consumed_tokens', 'available_tokens', 'first_visit'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function mysubscriptions(){
            return $this->hasMany(subscription::class);
    }

    public function myplan()
    {
        return $this->hasOne(myPlans::class, 'user_id')
            ->where('status', 0)
            ->where('end_at', '>', now());
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
