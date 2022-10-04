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
                'category' => 'Menu ibu hamil',
            ],
            [
                'category' => 'Menu ibu hamil & menyusui',
            ],
            [
                'category' => 'Menu bayi',
            ],
            [
                'category' => 'Menu balita & batita',
            ],
            [
                'category' => 'Menu Anak',
            ],
            [
                'category' => 'Menu Sehat untuk keluarga',
            ],
            [
                'category' => 'Menu menopause',
            ],
        ];
        
        DB::table('need_categories')->insert($needCategories);
    }
}