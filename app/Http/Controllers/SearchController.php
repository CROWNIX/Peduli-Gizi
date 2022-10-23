<?php

namespace App\Http\Controllers;

use App\Models\NeedCategory;
use App\Models\Recipe;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view("search", [
            'title' => 'Search',
            "recipes" => Recipe::latest()->filter()->limit(5)->get()
        ]);
    }

    public function age()
    {
        return view("");
    }

    public function needCategory(NeedCategory $needCategory)
    {
        return view("");
    }
}