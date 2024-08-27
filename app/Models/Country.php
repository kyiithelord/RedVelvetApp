<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    // public function user(){
    //     return $this->hasOne(User::class);
    // }
    // public function post(){
    //     return $this->hasOneThrough(Post::class,User::class);
    // }

    public function users(){
        return $this->hasMany(User::class);
    }

    public function posts(){
        return $this->hasManyThrough(Post::class,User::class);
    }
}
