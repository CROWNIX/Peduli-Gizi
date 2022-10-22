<?php

namespace App\helpers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Fungsi
{
    public static function hari()
    {
        return [
            [
                "name" => "Senin",
                "value" => "senin",
            ],
            [
                "name" => "Selasa",
                "value" => "selasa"
            ],
            [
                "name" => "Rabu",
                "value" => "rabu"
            ],
            [
                "name" => "Kamis",
                "value" => "kamis"
            ],
            [
                "name" => "Jumat",
                "value" => "jumat"
            ],
            [
                "name" => "Sabtu",
                "value" => "sabtu"
            ],
            [
                "name" => "Minggu",
                "value" => "minggu"
            ],
        ];
    }

    public static function jamMakan()
    {
        return [
            [
                "name" => "Sarapan",
                "value" => "sarapan"
            ],
            [
                "name" => "Makan Siang",
                "value" => "makan siang"
            ],
            [
                "name" => "Makan Malam",
                "value" => "makan malam"
            ]
        ];
    }
}
