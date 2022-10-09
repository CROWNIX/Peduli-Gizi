<?php

namespace App\Http\Controllers;

use App\Models\NeedCategory;
use Illuminate\Http\Request;

class AdminNeedCategoryController extends Controller{
    public function index(){        
        return view("", [
            "needCategories" => NeedCategory::all()
        ]);
    }

    public function create(){
        
    }

    public function store(Request $request){
        $rules = [
            "name" => "required",
            "slug" => "required|unique:need_categories"
        ];

        $validatedData = $request->validate($rules);
        NeedCategory::create($validatedData);
        
        return redirect("/admin/need-categories")->with("success", "Need category has been created");
    }

    public function show(NeedCategory $needCategory){
       
    }

    public function edit(NeedCategory $needCategory){
        return view("", [
            "needCategory" => $needCategory
        ]);
    }

    public function update(Request $request, NeedCategory $needCategory){
        $rules = [
            "name" => "required"
        ];

        if($needCategory->slug != $request->slug){
            $rules["slug"] = "required|unique:need_categories";
        }

        $validatedData = $request->validate($rules);
        $needCategory->update($validatedData);

        return redirect("/admin/need-categories")->with("success", "Need category has beed updated");
    }

    public function destroy(NeedCategory $needCategory){
        $needCategory->delete();

        return redirect("/admin/need-categories")->with("success", "Need category has beed deleted");
    }
}