<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Recipe extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ["id"];
    protected $with = ["needSubCategory"];

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

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}