<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NeedCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $needCategories = [
            [
                "name" => "Menu ibu hamil",
                "slug" => "menu-ibu-hamil"
            ],
            [
                "name" => "Menu ibu hamil & menyusui",
                "slug" => "menu-ibu-hamil-&-menyusui"
            ],
            [
                "name" => "Menu bayi",
                "slug" => "menu-bayi"
            ],
            [
                "name" => "Menu balita & batita",
                "slug" => "menu-balita-&-batita"
            ],
            [
                "name" => "Menu Anak",
                "slug" => "menu-anak"
            ],
            [
                "name" => "Menu Sehat untuk keluarga",
                "slug" => "menu-sehat-untuk-keluarga"
            ],
            [
                "name" => "Menu menopause",
                "slug" => "menu-menopause"
            ],
        ];
        
        DB::table('need_categories')->insert($needCategories);
    }
}