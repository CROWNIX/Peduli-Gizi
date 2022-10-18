<?php

namespace App\Helpers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Rumus
{
    public static function konvertKgToCm($weight)
    {
        return $weight / 100;
    }

    public static function rumusKalori($gender, $age, $height, $weight)
    {
        switch (strtolower($gender)) {
            case "laki-laki":
                return 66 + (13.7 * Rumus::konvertKgToCm($weight)) + (5 * $height) - (6.8 * $age);
            case "perempuan":
                return 66.5 + (9.6 * Rumus::konvertKgToCm($weight)) + (1.8 * $height) - (4.7 * $age);
            default:
                return null;
        }
    }

    public static function foodRecordKalori($totalFoodKalori, $userKalori)
    {
        $totalKalori = ($totalFoodKalori / $userKalori) * 100;
        return (int)$totalKalori;
    }

    public static function foodRecordProtein($userKalori)
    {
        $totalProtein = 0.15 * $userKalori;
        return (int)$totalProtein;
    }

    public static function foodRecordFat($userKalori)
    {
        $totalFat = 0.20 * $userKalori;
        return (int)$totalFat;
    }

    public static function foodRecordCarbohydrate($userKalori)
    {
        $totalCarbohydrate = 0.65 * $userKalori;
        return (int)$totalCarbohydrate;
    }

    public static function foodRecordFamilyKalori($totalKaloryFamily, $totalFamily)
    {
        return $totalKaloryFamily / $totalFamily . "%";
    }

    public static function foodRecordFamilyProtein($totalProteinFamily, $totalFamily)
    {
        return $totalProteinFamily / $totalFamily . "%";
    }

    public static function foodRecordFamilyCarbohydrate($totalCarbohydrateFamily, $totalFamily)
    {
        return $totalCarbohydrateFamily / $totalFamily . "%";
    }

    public static function foodRecordFamilyFat($totalFatFamily, $totalFamily)
    {
        return $totalFatFamily / $totalFamily . "%";
    }
}
