<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserNeed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view("profile", [
            'title' => "Profile"
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

    public function show(User $user)
    {
        
    }

    public function edit(User $user)
    {
        return view("", [
            "userNeeds" => UserNeed::all(),
            "user" => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            "name" => "required",
            "user_need_id" => "required",
            "age" => "required",
            "gender" => "required",
        ];

        if(!$request->name){
            $rules = [
                "image" => "image|file"
            ];
        }

        $validatedData = $request->validate($rules);
        $validatedData["weight"] = $request->weight;
        $validatedData["height"] = $request->height ?? 151;

        if(!$validatedData["weight"]){
            $validatedData["weight"] = $request->gender == "laki-laki" ? 61 : 56;
        } 

        if($request->file("image")){
            if($user->image != "default.jpg"){
                Storage::delete($user->image);
            }

            $validatedData["image"] = $request->file("image")->store("images/users");
        }

        $user->update($validatedData);

        return redirect("/users")->with("success", "Your profile has beed updated");
    }

    public function destroy(User $user)
    {
        //
    }
}