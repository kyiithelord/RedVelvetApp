<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

<<<<<<< HEAD
    // public function user(){
    //     return $this->belongsTo(User::class);
    // }

=======
>>>>>>> 93e2582c6c393d92a42c953dc2209b8320f26cba
    public function user(){
        return $this->belongsTo(User::class);
    }
}
