<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\UserNeed;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\Rumus;
use Illuminate\Support\Facades\Storage;

class FamilyController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);

        if (!$user->age) {
            return redirect("/users/$user->username/edit")->with("warning", "Anda harus melengkapi profile terlebih dahulu");
        }

        $kalori = Rumus::rumusKalori($user->gender, $user->age, $user->height, $user->weight);
        $protein = Rumus::rumusProtein($kalori);
        $fat = Rumus::rumusFat($kalori);
        $carbohydrate = Rumus::rumusCarbohydrate($kalori);

        if ($user->family->count()) {
            foreach ($user->family as $family) {
                $familyKalory = Rumus::rumusKalori($family->gender, $family->age, $family->height, $family->weight);
                $kalori += $familyKalory;
                $protein += Rumus::rumusProtein($familyKalory);
                $fat += Rumus::rumusFat($familyKalory);
                $carbohydrate += Rumus::rumusCarbohydrate($familyKalory);
            }
        }

        return view("family.index", [
            'title' => 'Keluargaku',
            "families" => Family::where("user_id", auth()->user()->id)->get(),
            "kalori" => $kalori,
            "protein" => $protein,
            "fat" => $fat,
            "carbohydrate" => $carbohydrate
        ]);
    }

    public function create()
    {
        return view("family.create", [
            'title' => 'Tambah Keluarga',
            "userNeeds" => UserNeed::all()
        ]);
    }

    public function store(Request $request)
    {
        $checkName = Family::where("user_id", auth()->user()->id)->where("name", $request->name)->first();

        $ruleName = $checkName ? "required|unique:families" : "required";

        $rules = [
            "user_need_id" => "required",
            "name" => $ruleName,
            "gender" => "required",
            "age" => "required",
            // "image" => "image|file"
        ];

        $validatedData = $request->validate($rules);
        $validatedData["weight"] = $request->weight;
        $validatedData["height"] = $request->height ?? 151;
        $validatedData["user_id"] = auth()->user()->id;

        if (!$validatedData["weight"]) {
            $validatedData["weight"] = $request->gender == "laki-laki" ? 61 : 56;
        }

        if ($request->file("image")) {
            $validatedData["image"] = $request->file("image")->store("images/families");
        }

        Family::create($validatedData);

        return redirect("/families")->with("success", "Keluarga berhasil ditambahkan");
    }

    public function show($name)
    {
        $family = Family::where("user_id", auth()->user()->id)->where("name", $name)->first();
        $kalori = Rumus::rumusKalori($family->gender, $family->age, $family->height, $family->weight);
        $protein = Rumus::rumusProtein($kalori);
        $fat = Rumus::rumusFat($kalori);
        $carbohydrate = Rumus::rumusCarbohydrate($kalori);

        if (!$family) {
            abort(404);
        }

        return view("family.show", [
            'title' => $family->name,
            "userNeeds" => UserNeed::all(),
            "family" => $family,
            "kalori" => $kalori,
            "protein" => $protein,
            "fat" => $fat,
            "carbohydrate" => $carbohydrate
        ]);
    }

    public function edit($name)
    {
        $famiily = Family::where("user_id", auth()->user()->id)->where("name", $name)->first();

        if (!$famiily) {
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
        ];

        $validatedData = $request->validate($rules);
        $validatedData["weight"] = $request->weight;
        $validatedData["height"] = $request->height ?? 151;

        if (!$validatedData["weight"]) {
            $validatedData["weight"] = $request->gender == "laki-laki" ? 61 : 56;
        }

        if ($request->file("image")) {
            if ($family->image) {
                Storage::delete($family->image);
            }

            $validatedData["image"] = $request->file("image")->store("images/families");
        }

        Family::where("user_id", $family->user_id)
            ->where("name", $family->name)
            ->update($validatedData);


        return redirect("/families")->with("success", "Keluarga berhasil diupdate");
    }

    public function destroy($name)
    {
        $family = Family::where("user_id", auth()->user()->id)->where("name", $name)->first();

        if($family->image){
            Storage::delete($family->image);
        }

        $family->delete();

        return redirect("/families")->with("success", "Keluarga berhasil dihapus");
    }
}