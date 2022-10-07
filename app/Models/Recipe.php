<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function needSubCategory(){
        return $this->belongsTo(NeedSubCategory::class);
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
}