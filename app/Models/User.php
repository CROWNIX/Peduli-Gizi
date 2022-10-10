<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ["id"];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function foodRecord(){
        return $this->hasMany(FoodRecord::class);
    }

    public function response(){
        return $this->hasMany(Response::class);
    }

    public function review(){
        return $this->hasMany(Review::class);
    }

    public function familyRecipe(){
        return $this->hasMany(FamilyRecipe::class);
    }
}