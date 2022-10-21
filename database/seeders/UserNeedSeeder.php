<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserNeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userNeeds = [
            [
                "name" => "Diet",
                "slug" => "diet"
            ],
            [
                "name" => "Hamil",
                "slug" => "hamil"
            ],
            [
                "name" => "Menopause",
                "slug" => "menopause"
            ],
            [
                "name" => "Normal",
                "slug" => "normal"
            ]
        ];
        
        DB::table("user_needs")->insert($userNeeds);
    }
}