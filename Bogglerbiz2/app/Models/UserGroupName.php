<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserGroupName extends Model
{
    protected $fillable = ['user_id', 'group_name', 'app_name', 'app_logo'];
}
