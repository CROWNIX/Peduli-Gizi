<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\FoodRecord;
use App\Models\User;
use Illuminate\Http\Request;

class FoodRecordController extends Controller
{
    public function index()
    {
        return view('food-record', [
            'title' => 'Food Record'
        ]);
    }

    public function create()
    {
        $user = User::find(auth()->user()->id);

        if(!$user->user_need_id){
            return redirect("/users/$user->username/edit")->with("warning", "Anda harus melengkapi profile terlebih dahulu");
        }

        return view('', [
            "families" => Family::all()
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(FoodRecord $foodRecord)
    {
        //
    }

    public function edit(FoodRecord $foodRecord)
    {
        //
    }

    public function update(Request $request, FoodRecord $foodRecord)
    {
        //
    }

    public function destroy(FoodRecord $foodRecord)
    {
        //
    }
}