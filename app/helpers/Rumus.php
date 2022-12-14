<?php

namespace App\helpers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Rumus
{
    public static function konvertKgToGram($weight)
    {
        return $weight * 1000;
    }
    public static function konvertCmToGram($height)
    {
        return $height * 10;
    }

    public static function rumusKalori($gender, $age, $height, $weight)
    {
        switch (strtolower($gender)) {
            case "laki-laki":
                return 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
            case "perempuan":
                return 655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
            default:
                return null;
        }
    }

    public static function rumusProtein($userKalori)
    {
        $totalProtein = 0.15 * $userKalori / 4;
        return (int)$totalProtein;
    }

    public static function rumusFat($userKalori)
    {
        $totalFat = 0.20 * $userKalori / 9;
        return (int)$totalFat;
    }

    public static function rumusCarbohydrate($userKalori)
    {
        $totalCarbohydrate = 0.65 * $userKalori / 4;
        return (int)$totalCarbohydrate;
    }

    public static function foodRecordKalori($totalFoodKalori, $userKalori)
    {
        $totalKalori = ($totalFoodKalori / $userKalori) * 100;
        return (int)$totalKalori . "%";
    }

    public static function foodRecordProtein($totalFoodProtein, $userProtein)
    {
        $totalProtein = ($totalFoodProtein / $userProtein) * 100;
        return (int)$totalProtein . "%";
    }

    public static function foodRecordFat($totalFoodFat, $userFat)
    {
        $totalFat = ($totalFoodFat / $userFat) * 100;
        return (int)$totalFat . "%";
    }

    public static function foodRecordCarbohydrate($totalFoodCarbohydrate, $userCarboydrate)
    {
        $totalCarbohydrate = ($totalFoodCarbohydrate / $userCarboydrate) * 100;
        return (int)$totalCarbohydrate . "%";
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
