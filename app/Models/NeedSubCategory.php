<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NeedSubCategory extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function recipe(){
        return $this->hasMany(Recipe::class);
    }
}