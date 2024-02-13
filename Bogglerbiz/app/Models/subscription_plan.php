<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscription_plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stripe_plan',
        'type',
        'features',
        'active'
    ];
    public function getRouteKeyName()
    {
        return 'name';
    }
    
}
