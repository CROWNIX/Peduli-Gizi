<?php

namespace App\Http\Controllers;

use App\Models\FoodRecord;
use App\Models\Family;
use App\Models\User;
use Illuminate\Http\Request;
use App\helpers\Rumus;
use App\helpers\Fungsi;

class FamilyFoodRecordController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
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

        $foodRecords = [];
        foreach (Fungsi::hari() as $day) {
            $foodRecords[$day["value"]]["Sarapan"] = [];
            $foodRecords[$day["value"]]["Makan Siang"] = [];
            $foodRecords[$day["value"]]["Makan Malam"] = [];
        }

        foreach (Fungsi::hari() as $day) {
                $foodRecords[$day["value"]]["Sarapan"] = $user->foodRecord->where("day", $day["value"])->where("time", "sarapan");
                $foodRecords[$day["value"]]["Makan Siang"] = $user->foodRecord->where("day", $day["value"])->where("time", "makan siang");
                $foodRecords[$day["value"]]["Makan Malam"] = $user->foodRecord->where("day", $day["value"])->where("time", "makan malam");
                if($user->family->count()){
                    foreach ($user->family as $family) {
                        if($family->foodRecord->count()){
                            $sarapan = $family->foodRecord->where("day", $day["value"])->where("time", "sarapan");
                            $makanSiang = $family->foodRecord->where("day", $day["value"])->where("time", "makan siang");
                            $makanMalam = $family->foodRecord->where("day", $day["value"])->where("time", "makan malam");

                            if($sarapan->count()){
                                foreach ($sarapan as $s) {
                                    $foodRecords[$day["value"]]["Sarapan"][] = $s;
                                }
                            }

                            if($makanSiang->count()){
                                foreach ($makanSiang as $ms) {
                                    $foodRecords[$day["value"]]["Sarapan"][] = $ms;
                                }
                            }

                            if($makanMalam->count()){
                                foreach ($makanMalam as $mm) {
                                    $foodRecords[$day["value"]]["Sarapan"][] = $mm;
                                }
                            }
                        }
                    }
                }
        }

        return view('foodrecord.index', [
            'title' => 'Food Record',
            "foodRecords" => $foodRecords,
            "kalori" => $kalori,
            "protein" => $protein,
            "fat" => $fat,
            "carbohydrate" => $carbohydrate,
            'families' => Family::where("user_id", auth()->user()->id)->get()
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

    public function show($name)
    {
        $user = Family::where("user_id", auth()->user()->id)->where("name", $name)->first();

        if(!$user){
            abort(404);
        }
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
                $foodRecords[$day["value"]]["Sarapan"] = $user->foodRecord->where("day", $day["value"])->where("time", "sarapan");
                $foodRecords[$day["value"]]["Makan Siang"] = $user->foodRecord->where("day", $day["value"])->where("time", "makan siang");
                $foodRecords[$day["value"]]["Makan Malam"] = $user->foodRecord->where("day", $day["value"])->where("time", "makan malam");
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

    public function edit($name)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}