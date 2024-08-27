<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

<<<<<<< HEAD
    // public function post(){
    //     return $this->hasOne(Post::class);
    // }
    // public function country(){
    //     return $this->belongsTo(Country::class);
    // }


    public function posts(){
        return $this->hasMany(Post::class);
    }

=======
    public function post(){
        return $this->hasOne(Post::class);
    }
>>>>>>> 93e2582c6c393d92a42c953dc2209b8320f26cba
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
