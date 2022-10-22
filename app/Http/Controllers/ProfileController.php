<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserNeed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function index()
    {
        return view("profile.index", [
            'title' => "Profile",
            "user" => User::find(auth()->user()->id)
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
        return view("profile.edit", [
            'title' => "Edit Profile",
            "user" => $user,
            "userNeeds" => UserNeed::all()
        ]);
    }

    public function update(Request $request, User $user)
    {
        // $ruleImage = $request->image ? "image|file" : "";
        $rules = [
            "name" => "required",
            "user_need_id" => "required",
            "age" => "required",
            "gender" => "required",
            // "image" => $ruleImage
        ];

        if (!$request->name) {
            $rules = [
                "image" => "image|file"
            ];
        }

        $validatedData = $request->validate($rules);

        if ($request->name) {
            $validatedData["weight"] = $request->weight;
            $validatedData["height"] = $request->height ?? 151;
            $validatedData["username"] = Str::slug($request->name, '-');

            if (!$validatedData["weight"]) {
                $validatedData["weight"] = $request->gender == "laki-laki" ? 61 : 56;
            }
        }

        if ($request->file("image")) {
            if ($user->image != "default.jpg") {
                Storage::delete($user->image);
            }

            $validatedData["image"] = $request->file("image")->store("images/users");
        }

        $user->update($validatedData);

        return redirect("/users")->with("success", "Profile anda berhasil diupdate");
    }

    public function destroy(User $user)
    {
        //
    }
}