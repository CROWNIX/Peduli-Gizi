<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NeedSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $needSubCategories = [
            [
                "need_category_id" => 1,
                "category" => "Hidangan Sehat Ibu Hamil Triwulan Pertama",
            ],
            [
                "need_category_id" => 1,
                "category" => "Hidangan Sehat Ibu Hamil Triwulan Kedua",
            ],
            [
                "need_category_id" => 1,
                "category" => "Hidangan Sehat Ibu Hamil Triwulan Ketiga",
            ],
            [
                "need_category_id" => 1,
                "category" => "Hidangan Ideal Ibu Hamil",
            ],
            [
                "need_category_id" => 2,
                "category" => "Minuman Sehat",
            ],
            [
                "need_category_id" => 2,
                "category" => "Hidangan Serba Susu",
            ],
            [
                "need_category_id" => 2,
                "category" => "Sarapan Untuk Ibu Menyusui",
            ],
            [
                "need_category_id" => 2,
                "category" => "Hidangan Dari Kelapa Muda",
            ],
            [
                "need_category_id" => 2,
                "category" => "Snack",
            ],
            [
                "need_category_id" => 2,
                "category" => "Rendah Lemak dan gula",
            ],
            [
                "need_category_id" => 2,
                "category" => "Makanan Sehat Untuk ibu Menyusui",
            ],
            [
                "need_category_id" => 2,
                "category" => "Menu Pasca Melahirkan",
            ],
            [
                "need_category_id" => 3,
                "category" => "Aneka Bubur",
            ],
            [
                "need_category_id" => 3,
                "category" => "Aneka Pure",
            ],
            [
                "need_category_id" => 3,
                "category" => "Aneka Tim",
            ],
            [
                "need_category_id" => 3,
                "category" => "Finger Food",
            ],
            [
                "need_category_id" => 3,
                "category" => "Minuman",
            ],
            [
                "need_category_id" => 3,
                "category" => "Aneka Kaldu",
            ],
            [
                "need_category_id" => 4,
                "category" => "Makanan Balita dan Batita",
            ],
            [
                "need_category_id" => 4,
                "category" => "Kreasi Menarik Hidangan Anak",
            ],
            [
                "need_category_id" => 4,
                "category" => "Makanan Balita Tanpa Pengawet",
            ],
            [
                "need_category_id" => 4,
                "category" => "Omega 3",
            ],
            [
                "need_category_id" => 4,
                "category" => "Autis",
            ],
            [
                "need_category_id" => 4,
                "category" => "Makanan Organik Untuk Balita",
            ],
            [
                "need_category_id" => 5,
                "category" => "Aneka Hidangan Sehat Untuk Anak",
            ],
            [
                "need_category_id" => 5,
                "category" => "Bekal Anak Sekolah Ala Bento",
            ],
            [
                "need_category_id" => 6,
                "category" => "Aneka Hidangan Utama",
            ],
            [
                "need_category_id" => 6,
                "category" => "Aneka Appetizer",
            ],
            [
                "need_category_id" => 6,
                "category" => "Aneka Salad",
            ],
            [
                "need_category_id" => 6,
                "category" => "Aneka Hidangan Kuah",
            ],
            [
                "need_category_id" => 6,
                "category" => "Aneka Lauk",
            ],
            [
                "need_category_id" => 6,
                "category" => "Aneka Snack",
            ],
            [
                "need_category_id" => 6,
                "category" => "Aneka Dessert",
            ],
            [
                "need_category_id" => 6,
                "category" => "Aneka Minuman",
            ],
            [
                "need_category_id" => 6,
                "category" => "Aneka Sayur",
            ],
            [
                "need_category_id" => 6,
                "category" => "Vegetaris",
            ],
            [
                "need_category_id" => 7,
                "category" => "Dessert Menopause",
            ],
            [
                "need_category_id" => 7,
                "category" => "Minuman segar Menopause",
            ],
            [
                "need_category_id" => 7,
                "category" => "Sarapan",
            ],
            [
                "need_category_id" => 7,
                "category" => "Lauk",
            ],
            [
                "need_category_id" => 7,
                "category" => "Healthy Juices",
            ],
            [
                "need_category_id" => 7,
                "category" => "Penyubur Pria dan Wanita",
            ],
            [
                "need_category_id" => 7,
                "category" => "Aneka Hidangan Bergizi",
            ],
            [
                "need_category_id" => 7,
                "category" => "Hidangan Rendah Lemak",
            ],
            [
                "need_category_id" => 7,
                "category" => "Meningkatkan Daya Tahan Tubuh",
            ],
            [
                "need_category_id" => 7,
                "category" => "Menu Diare",
            ],
            [
                "need_category_id" => 7,
                "category" => "Sepinggan Rendah Garam",
            ],
            [
                "need_category_id" => 7,
                "category" => "Low Cholesterol",
            ],
            [
                "need_category_id" => 7,
                "category" => "Menu Rendah Gula",
            ],
            [
                "need_category_id" => 7,
                "category" => "Hidangan Pesta Untuk Menjaga Berat Badan",
            ],
            [
                "need_category_id" => 7,
                "category" => "Hidangan Organik Ala Resto",
            ],
        ];
        
        DB::table('need_sub_categories')->insert($needSubCategories);
    }
}