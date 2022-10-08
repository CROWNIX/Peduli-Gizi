<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FamilyRecipeController;
use App\Http\Controllers\FoodRecordController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminAgeCategoryController;
use App\Http\Controllers\AdminRecipeController;
use App\Http\Controllers\AdminNeedCategoryController;
use App\Http\Controllers\AdminNeedSubCategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminDashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [HomeController::class, "index"]);
Route::get("/register", [RegisterController::class, "index"]);
Route::get("/login", [LoginController::class, "index"]);

Route::resources([
    "profile" => ProfileController::class,
    "food-records" => FoodRecordController::class,
    "family-recipes" => FamilyRecipeController::class,
    "recipes" => RecipeController::class,
]);

//* Route Admin 
Route::prefix("admin")->group(function () {
    Route::get("/", [AdminHomeController::class, "index"]);
    Route::get("/dashboard", [AdminDashboardController::class, "index"]);
    Route::resources([
        "age-categories" => AdminAgeCategoryController::class,
        "need-categories" => AdminNeedCategoryController::class,
        "need-sub-categories" => AdminNeedSubCategoryController::class,
        "recipes" => AdminRecipeController::class,
    ]);

});