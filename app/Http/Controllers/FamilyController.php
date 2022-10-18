<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FamilyController extends Controller
{
    public function index()
    {
        return view("", [
            "families" => Family::where("user_id", auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        return view("");
    }

    public function store(Request $request)
    {
        $checkName = Family::where("user_id", auth()->user()->id)->where("name", $request->name)->first();

        $ruleName = $checkName ? "required|unique" : "required";

        $rules = [
            "user_need_id" => "required",
            "name" => $ruleName,
            "gender" => "required",
            "age" => "required",
            "image" => "image|file"
        ];

        $validatedData = $request->validate($rules);
        $validatedData["weight"] = $request->weight;
        $validatedData["height"] = $request->height ?? 151;

        if(!$validatedData["weight"]){
            $validatedData["weight"] = $request->gender == "laki-laki" ? 61 : 56;
        } 

        if($request->file("image")){
            $validatedData["image"] = $request->file("image")->store("images/families");
        }

        Family::create($validatedData);

        return redirect("/families")->with("success", "Keluarga berhasil ditambahkan");
    }

    public function show($name)
    {
        $famiily = Family::where("user_id", auth()->user()->id)->where("name", $name)->first();

        if(!$famiily){
            abort(404);
        }

        return view("", [
            "family" => $famiily
        ]);
    }

    public function edit($name)
    {
        $famiily = Family::where("user_id", auth()->user()->id)->where("name", $name)->first();

        if(!$famiily){
            abort(404);
        }

        return view("", [
            "family" => $famiily
        ]);
    }

    public function update(Request $request, $name)
    {
        $family = Family::where("user_id", auth()->user()->id)->where("name", $name)->first();

        $rules = [
            "user_need_id" => "required",
            "name" => "required",
            "gender" => "required",
            "age" => "required",
            "image" => "image|file"
        ];

        $validatedData = $request->validate($rules);
        $validatedData["weight"] = $request->weight;
        $validatedData["height"] = $request->height ?? 151;

        if(!$validatedData["weight"]){
            $validatedData["weight"] = $request->gender == "laki-laki" ? 61 : 56;
        } 

        if($request->file("image")){
            if($family->image){
                Storage::delete($family->image);
            }
            
            $validatedData["image"] = $request->file("image")->store("images/families");
        }

        Family::where("user_id", $family->iuser_d)
            ->where("name", $family->name)
            ->update($validatedData);


        return redirect("/families")->with("success", "Keluarga berhasil diupdate");
    }

    public function destroy($name)
    {
        $family = Family::where("user_id", auth()->user()->id)->where("name", $name)->first();

        Family::where("user_id", $family->iuser_d)
            ->where("name", $family->name)
            ->delete();

        return redirect("/families")->with("success", "Keluarga berhasil dihapus");
    }
}