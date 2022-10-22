<?php

namespace App\Http\Controllers;

use App\Models\FoodRecord;
use App\Models\Family;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\Rumus;
use App\Helpers\Fungsi;
use Illuminate\Support\Str;

class FoodRecordController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        $userKalori = Rumus::rumusKalori($user->gender, $user->age, $user->height, $user->weight);
        $userProtein = Rumus::rumusProtein($userKalori);
        $userFat = Rumus::rumusFat($userKalori);
        $userCarbohydrate = Rumus::rumusCarbohydrate($userKalori);
        $totalFoodKalori = 0;
        $totalFoodProtein = 0;
        $totalFoodFat = 0;
        $totalFoodCarbohydrate = 0;
        foreach ($user->foodRecord as $foodRecord) {
            $totalFoodKalori += $foodRecord->recipe->energy * $foodRecord->portion;
            $totalFoodProtein += $foodRecord->recipe->protein * $foodRecord->portion;
            $totalFoodFat += $foodRecord->recipe->fat * $foodRecord->portion;
            $totalFoodCarbohydrate += $foodRecord->recipe->carbohydrate * $foodRecord->portion;
        }

        $foodRecordKalori = Rumus::foodRecordKalori($totalFoodKalori, $userKalori);
        $foodRecordProtein = Rumus::foodRecordProtein($totalFoodProtein, $userProtein);
        $foodRecordFat = Rumus::foodRecordFat($totalFoodFat, $userFat);
        $foodRecordCarbohydrate = Rumus::foodRecordCarbohydrate($totalFoodCarbohydrate, $userCarbohydrate);

        $foodRecords = [];
        foreach (Fungsi::hari() as $day) {
            $foodRecords[$day["value"]]["Sarapan"] = [];
            $foodRecords[$day["value"]]["Makan Siang"] = [];
            $foodRecords[$day["value"]]["Makan Malam"] = [];
        }

        foreach (Fungsi::hari() as $day) {
                $foodRecords[$day["value"]]["Sarapan"] = $user->foodRecord->where("day", $day["value"])->where("time", "Sarapan");
                $foodRecords[$day["value"]]["Makan Siang"] = $user->foodRecord->where("day", $day["value"])->where("time", "Makan Siang");
                $foodRecords[$day["value"]]["Makan Malam"] = $user->foodRecord->where("day", $day["value"])->where("time", "Makan Malam");
        }

        return view('foodrecord.index', [
            'title' => 'Food Record',
            "foodRecords" => $foodRecords,
            "kalori" => $foodRecordKalori,
            "protein" => $foodRecordProtein,
            "fat" => $foodRecordFat,
            "carbohydrate" => $foodRecordCarbohydrate,
            'families' => Family::where("user_id", auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        $user = User::find(auth()->user()->id);

        if (!$user->age) {
            return redirect("/users/$user->username/edit")->with("warning", "Anda harus melengkapi profile terlebih dahulu");
        }

        return view('recipe.add-record', [
            'title' => 'menambahkan food recipe',
            'families' => Family::where("user_id", auth()->user()->id)->get()
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            "day" => "required",
            "time" => "required",
            "portion" => "required"
        ];

        $validatedData = $request->validate($rules);
        $recipe = Recipe::where("slug", Str::slug($request->recipe_slug, "-"))->first();
        $validatedData["family_id"] = $request->family_id;
        $validatedData["recipe_id"] = $recipe->id;
        if (!$request->family_id) {
            $validatedData["user_id"] = auth()->user()->id;
        }

        FoodRecord::create($validatedData);

        return redirect("/food-records")->with("success", "Food record berhasil ditambahkan");
    }

    public function show(FoodRecord $foodRecord)
    {
        return view("foodrecord.show", [
            'title' => $foodRecord->recipe->title,
            "foodRecord" => $foodRecord
        ]);
    }

    public function edit(FoodRecord $foodRecord)
    {
        return view("", [
            "foodRecord" => $foodRecord
        ]);
    }

    public function update(Request $request, FoodRecord $foodRecord)
    {
        $rules = [
            "recipe_id" => "required",
            "day" => "required",
            "time" => "required",
            "portion" => "required"
        ];

        $validatedData = $request->validate($rules);

        $foodRecord->update($validatedData);

        return redirect("food-records")->with("success", "Food record berhasil diupdate");
    }

    public function destroy(FoodRecord $foodRecord)
    {
        $foodRecord->delete();

        return redirect("/food-records")->with("success", "Food record berhasil dihapus");
    }
}