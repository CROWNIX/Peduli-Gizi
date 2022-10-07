<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NeedCategory extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function needSubCategory(){
        return $this->hasMany(NeedSubCategory::class);
    }
}