<?php

namespace App\Http\Controllers;

use App\Models\FoodRecord;
use App\Models\Family;
use Illuminate\Http\Request;
use App\Helpers\Rumus;

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
        return view('recipe.add-record', [
            'title' => 'menambahkan food recipe',
            'families' => Family::where("user_id", auth()->user()->id)->get()
        ]);
    }

    public function store(Request $request)
    {
        dd($request);
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
