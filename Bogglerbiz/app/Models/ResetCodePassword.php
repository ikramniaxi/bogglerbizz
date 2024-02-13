<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResetCodePassword extends Model
{
    protected $primaryKey = 'email';
    public $incrementing = false;

    use HasFactory;
    public $guarded;
    public $timestamps = false;
    public $table='password_resets';
}
