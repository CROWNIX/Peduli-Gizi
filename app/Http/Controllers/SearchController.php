<?php

namespace App\Http\Controllers;

use App\Models\NeedCategory;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view("search", [
            'title' => 'Search'
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
