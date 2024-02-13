<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainmodel extends Model
{
    use HasFactory;
    public $fillable=['file_name','file_size','user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
