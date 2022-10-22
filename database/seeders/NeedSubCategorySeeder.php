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
                "name" => "Hidangan Sehat Ibu Hamil Triwulan Pertama",
                "slug" => "hidangan-sehat-ibu-hamil-triwulan-pertama"
            ],
            [
                "need_category_id" => 1,
                "name" => "Hidangan Sehat Ibu Hamil Triwulan Kedua",
                "slug" => "hidangan-sehat-ibu-hamil-triwulan-kedua"
            ],
            [
                "need_category_id" => 1,
                "name" => "Hidangan Sehat Ibu Hamil Triwulan Ketiga",
                "slug" => "hidangan-sehat-ibu-hamil-triwulan-ketiga"
            ],
            [
                "need_category_id" => 1,
                "name" => "Hidangan Ideal Ibu Hamil",
                "slug" => "hidangan-ideal-ibu-hamil"
            ],
            [
                "need_category_id" => 2,
                "name" => "Minuman Sehat",
                "slug" => "minuman-sehat"
            ],
            [
                "need_category_id" => 2,
                "name" => "Hidangan Serba Susu",
                "slug" => "hidangan-serba-susu"
            ],
            [
                "need_category_id" => 2,
                "name" => "Sarapan Untuk Ibu Menyusui",
                "slug" => "sarapan-untuk-ibu-menyusui"
            ],
            [
                "need_category_id" => 2,
                "name" => "Hidangan Dari Kelapa Muda",
                "slug" => "hidangan-dari-kelapa-muda"
            ],
            [
                "need_category_id" => 2,
                "name" => "Snack",
                "slug" => "snack"
            ],
            [
                "need_category_id" => 2,
                "name" => "Rendah Lemak dan gula",
                "slug" => "rendah-lemak-dan-gula"
            ],
            [
                "need_category_id" => 2,
                "name" => "Makanan Sehat Untuk ibu Menyusui",
                "slug" => "makanan-sehat-untuk-ibu-menyusui"
            ],
            [
                "need_category_id" => 2,
                "name" => "Menu Pasca Melahirkan",
                "slug" => "menu-pasca-melahirkan"
            ],
            [
                "need_category_id" => 3,
                "name" => "Aneka Bubur",
                "slug" => "aneka-bubur"
            ],
            [
                "need_category_id" => 3,
                "name" => "Aneka Pure",
                "slug" => "aneka-pure"
            ],
            [
                "need_category_id" => 3,
                "name" => "Aneka Tim",
                "slug" => "aneka-tim"
            ],
            [
                "need_category_id" => 3,
                "name" => "Finger Food",
                "slug" => "finger-food"
            ],
            [
                "need_category_id" => 3,
                "name" => "Minuman",
                "slug" => "minuman"
            ],
            [
                "need_category_id" => 3,
                "name" => "Aneka Kaldu",
                "slug" => "aneka-kaldu"
            ],
            [
                "need_category_id" => 4,
                "name" => "Makanan Balita dan Batita",
                "slug" => "makanan-balita-dan-batita"
            ],
            [
                "need_category_id" => 4,
                "name" => "Kreasi Menarik Hidangan Anak",
                "slug" => "kreasi-menarik-hidangan-anak"
            ],
            [
                "need_category_id" => 4,
                "name" => "Makanan Balita Tanpa Pengawet",
                "slug" => "makanan-balita-tanpa-pengawet"
            ],
            [
                "need_category_id" => 4,
                "name" => "Omega 3",
                "slug" => "-omega-2"
            ],
            [
                "need_category_id" => 4,
                "name" => "Autis",
                "slug" => "autis"
            ],
            [
                "need_category_id" => 4,
                "name" => "Makanan Organik Untuk Balita",
                "slug" => "makanan-organik-untuk-balita"
            ],
            [
                "need_category_id" => 5,
                "name" => "Aneka Hidangan Sehat Untuk Anak",
                "slug" => "aneka-hidangan-sehat-untuk-anak"
            ],
            [
                "need_category_id" => 5,
                "name" => "Bekal Anak Sekolah Ala Bento",
                "slug" => "bekal-anak-sekolah-ala-bento"
            ],
            [
                "need_category_id" => 6,
                "name" => "Aneka Hidangan Utama",
                "slug" => "aneka-hidangan-utama"
            ],
            [
                "need_category_id" => 6,
                "name" => "Aneka Appetizer",
                "slug" => "aneka-appetizer"
            ],
            [
                "need_category_id" => 6,
                "name" => "Aneka Salad",
                "slug" => "aneka-salad"
            ],
            [
                "need_category_id" => 6,
                "name" => "Aneka Hidangan Kuah",
                "slug" => "angka-hidangan-kuah"
            ],
            [
                "need_category_id" => 6,
                "name" => "Aneka Lauk",
                "slug" => "aneka-lauk"
            ],
            [
                "need_category_id" => 6,
                "name" => "Aneka Snack",
                "slug" => "aneka-snack"
            ],
            [
                "need_category_id" => 6,
                "name" => "Aneka Dessert",
                "slug" => "aneka-dessert"
            ],
            [
                "need_category_id" => 6,
                "name" => "Aneka Minuman",
                "slug" => "aneka-minuman"
            ],
            [
                "need_category_id" => 6,
                "name" => "Aneka Sayur",
                "slug" => "aneka-sayur"
            ],
            [
                "need_category_id" => 6,
                "name" => "Vegetaris",
                "slug" => "vegetaris"
            ],
            [
                "need_category_id" => 7,
                "name" => "Dessert Menopause",
                "slug" => "dessert-menopause"
            ],
            [
                "need_category_id" => 7,
                "name" => "Minuman segar Menopause",
                "slug" => "minuman-segar-menopause"
            ],
            [
                "need_category_id" => 7,
                "name" => "Sarapan",
                "slug" => "sarapan"
            ],
            [
                "need_category_id" => 7,
                "name" => "Lauk",
                "slug" => "lauk"
            ],
            [
                "need_category_id" => 7,
                "name" => "Healthy Juices",
                "slug" => "healthy-juices"
            ],
            [
                "need_category_id" => 7,
                "name" => "Penyubur Pria dan Wanita",
                "slug" => "penyubur-pria-dan-wanita"
            ],
            [
                "need_category_id" => 7,
                "name" => "Aneka Hidangan Bergizi",
                "slug" => "aneka-hidangan-bergizi"
            ],
            [
                "need_category_id" => 7,
                "name" => "Hidangan Rendah Lemak",
                "slug" => "hidangan-rendah-lemak"
            ],
            [
                "need_category_id" => 7,
                "name" => "Meningkatkan Daya Tahan Tubuh",
                "slug" => "meningkatkan-daya-tahan-tubuh"
            ],
            [
                "need_category_id" => 7,
                "name" => "Menu Diare",
                "slug" => "menu-diare"
            ],
            [
                "need_category_id" => 7,
                "name" => "Sepinggan Rendah Garam",
                "slug" => "sepingan-rendah-garam"
            ],
            [
                "need_category_id" => 7,
                "name" => "Low Cholesterol",
                "slug" => "low-cholesterol"
            ],
            [
                "need_category_id" => 7,
                "name" => "Menu Rendah Gula",
                "slug" => "menu-rendah-gula"
            ],
            [
                "need_category_id" => 7,
                "name" => "Hidangan Pesta Untuk Menjaga Berat Badan",
                "slug" => "hidangan-pesta-untuk-menjaga-berat-badan"
            ],
            [
                "need_category_id" => 7,
                "name" => "Hidangan Organik Ala Resto",
                "slug" => "hidangan-organik-ala-resto"
            ],
        ];
        
        DB::table('need_sub_categories')->insert($needSubCategories);
    }
}