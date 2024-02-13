<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GPTAccount extends Model{
  protected $fillable = ['account_email', 'api_key', 'status', 'requests', 'success_requests'];
}
