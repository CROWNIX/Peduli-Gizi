<?php

namespace App\Http\Controllers;

use App\Models\NeedSubCategory;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminRecipeController extends Controller{
    public function index(){        
        return view("", [
            "recipes" => Recipe::all(),
        ]);
    }

    public function create(){
        return view("", [
            "needSubCategories" => NeedSubCategory::all()
        ]);
    }

    public function store(Request $request){
        $rules = [
            "need_sub_category_id" => "required",
            "title" => "required|max:255",
            "slug" => "required|unique:recipes",
            "image" => "image|file",
            "ingridients" => "required",
            "steps" => "required",
            "portion" => "required",
            "energy" => "required",
            "protein" => "required",
            "fat" => "required",
            "carbohydrate" => "required"
        ];

        $validatedData = $request->validate($rules);
        if($request->file("image")){
            $validatedData["image"] = $request->file("image")->store("images/recipes");
        }
        Recipe::create($validatedData);

        return redirect("/admin/recipes")->with("success", "Recipe has beed added");
         
    }

    public function show(Recipe $recipe){
        return view("", [
            "recipe" => $recipe
        ]);
    }

    public function edit(Recipe $recipe){
        return view("", [
            "recipe" => $recipe,
            "needSubCategories" => NeedSubCategory::all()
        ]);
    }

    public function update(Request $request, Recipe $recipe){
        $rules = [
            "need_sub_category_id" => "required",
            "title" => "required|max:255",
            "image" => "image|file",
            "ingridients" => "required",
            "steps" => "required",
            "portion" => "required",
            "energy" => "required",
            "protein" => "required",
            "fat" => "required",
            "carbohydrate" => "required"
        ];

        if($recipe->slug != $request->slug){
            $rules["slug"] = "required|unique:recipes";
        }

        $validatedData = $request->validate($rules);
        if($request->file("image")){
            if($recipe->image != "default.jpg"){
                Storage::delete($recipe->image);
            }

            $validatedData["image"] = $request->file("image")->store("images/recipes");
        }

        $recipe->update($validatedData);

        return redirect("/admin/recipes")->with("success", "Recipe has beed updated");
    }

    public function destroy(Recipe $recipe){
        if($recipe->image != "default.jpg"){
            Storage::delete($recipe->image);
        }

        $recipe->delete();

        return redirect("/admin/recipes")->with("success", "Recipe has beed deleted");
    }
}