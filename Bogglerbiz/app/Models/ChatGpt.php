<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatGpt extends Model{
    protected $fillable = ['user_id','session_id','account_id','query','finish_reason','prompt_tokens','completion_tokens','response','session_id', 'status', 'model', 'is_widget'];
}
