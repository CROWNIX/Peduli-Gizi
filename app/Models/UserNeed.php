<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNeed extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function user(){
        return $this->hasMany(User::class);
    }

    public function family(){
        return $this->hasMany(Family::class);
    }
}