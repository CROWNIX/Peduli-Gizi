<?php

namespace App\Http\Controllers;

use App\Models\FoodRecord;
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
        //
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
