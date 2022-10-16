<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        return view("recipes", [
            'title' => "Resep Makanan Bergizi",
            "recipes" => Recipe::latest()->filter()->get()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Recipe $recipe)
    {
        dd($recipe);
        return view("detail-recipes", [
            'title' => $recipe->title,
            "recipe" => $recipe
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}