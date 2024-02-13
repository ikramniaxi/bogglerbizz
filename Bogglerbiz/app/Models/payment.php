<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $fillable = [
        'user_id',
        'amount', // Add 'amount' field here
        'subscription_id'
    ];
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function subscription(){
       return $this->belongsTo(subscription::class,'subscription_id');
    }
}
