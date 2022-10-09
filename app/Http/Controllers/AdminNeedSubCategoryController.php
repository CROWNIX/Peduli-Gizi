<?php

namespace App\Http\Controllers;

use App\Models\NeedCategory;
use App\Models\NeedSubCategory;
use App\Models\Recipe;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminNeedSubCategoryController extends Controller{
    public function index(){        
        return view("", [
            "subCategories" => NeedSubCategory::all()
        ]);
    }

    public function create(){
        return view("", [
            "needCategory" => NeedCategory::all()
        ]);
    }

    public function store(Request $request){
       $rules = [
            "need_category_id" => "required",
            "name" => "required",
            "slug" => "required|unique:need_sub_categories"
       ];

       $validatedData = $request->validate($rules);
       Recipe::create($validatedData);

       return redirect("/admin/need-sub-categories")->with("success", "Need sub category has been added");
    }

    public function show(NeedSubCategory $needSubCategory){
        
    }

    public function edit(NeedSubCategory $needSubCategory){
        return view("", [
            "needSubCategory" => $needSubCategory
        ]);
    }

    public function update(Request $request, NeedSubCategory $needSubCategory){
        $rules = [
            "need_category_id" => "required",
            "name" => "required",
        ];

        if($needSubCategory->slug != $request->slug){
            $rules["slug"] = "required|unique:need_sub_categories";
        }

        $validatedData = $request->validate($rules);
        $needSubCategory->update($validatedData);

        return redirect("/admin/need-sub-categories")->with("Need Sub Category has been updated");
    }

    public function destroy(NeedSubCategory $needSubCategory){
        $needSubCategory->delete();
        
        return redirect("/admin/need-sub-categories")->with("Need Sub Category has been deleted");
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(NeedSubCategory::class, 'slug', $request->name);

        return response()->json(["slug" => $slug]);
    }
}