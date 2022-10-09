<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class NeedCategory extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ["id"];

    public function needSubCategory(){
        return $this->hasMany(NeedSubCategory::class);
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