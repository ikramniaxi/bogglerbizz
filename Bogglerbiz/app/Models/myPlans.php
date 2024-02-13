<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myPlans extends Model
{
    use HasFactory;
    public $fillable=
    ['user_id','subscription_plans_id','status','end_at'];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function plans(){
        return $this->belongsTo(subscription_plan::class,'subscription_plans_id');
    }
}
