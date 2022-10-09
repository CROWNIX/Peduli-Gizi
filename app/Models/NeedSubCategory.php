<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class NeedSubCategory extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ["id"];

    public function recipe(){
        return $this->hasMany(Recipe::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}