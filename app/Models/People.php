<?php

namespace App\Models;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    public function phone(){
        return $this -> hasOne(Phone::class);
    }
}
