<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\FoodRecord;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\Rumus;

class FoodRecordController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);

        $weight = Rumus::konvertKgToCm($user->weight);
        $userKalori = Rumus::rumusKalori($user->gender, $user->age, $user->height, $weight);
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

        return view('food-record', [
            'title' => 'Food Record',
            "foodRecords" => $user->foodRecord,
            "kalori" => $foodRecordKalori,
            "protein" => $foodRecordProtein,
            "fat" => $foodRecordFat,
            "carbohydrate" => $foodRecordCarbohydrate
        ]);
    }
    
    public function create()
    {
        $user = User::find(auth()->user()->id);

        if(!$user->age){
            return redirect("/users/$user->username/edit")->with("warning", "Anda harus melengkapi profile terlebih dahulu");
        }
        
        return view('', [
            "families" => Family::all(),
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            "recipe_id" => "required",
            "day" => "required",
            "time" => "required",
            "portion" => "required"
        ];

        $validatedData = $request->validate($rules);
        $validatedData["family_id"] = $request->family_id;
        if(!$request->family_id){
            $validatedData["user_id"] = auth()->user()->id;
        }

        FoodRecord::create($validatedData);

        return redirect("/food-records")->with("success", "Food record berhasil ditambahkan");
    }

    public function show($id)
    {
        $foodRecord = FoodRecord::find($id)->where("user_id", auth()->user()->id);
        
        if(!$foodRecord){
            abort(404);
        }

        return view("", [
            "foodRecord" => $foodRecord
        ]); 
    }

    public function edit($id)
    {
        $foodRecord = FoodRecord::find($id)->where("user_id", auth()->user()->id);
        
        if(!$foodRecord){
            abort(404);
        }

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