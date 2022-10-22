<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome', [
            "title" => "Home",
            "recipes" => Recipe::limit(3)->get()
        ]);
    }
}