<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller{
    public function index(){
        $recipes = Recipe::latest()->get();
        dd($recipes);
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show(Recipe $recipe){
        dd($recipe);
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}