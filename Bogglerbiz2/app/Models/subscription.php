<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'stripe_id',
        'stripe_price',
        'quantity',
        'trial_ends_at',
        'ends_at',
        'subscriptionPlan_id',
        'stripe_status'
    ];

    public function user(){
       return $this->belongsTo(User::class,'user_id');
    }
    public function subscriptionPlan(){
       return $this->belongsTo(subscription_plan::class,'subscriptionPlan_id');
    }

    public function payments(){
        return $this->hasMany(payment::class,'subscription_id');
    }
}
