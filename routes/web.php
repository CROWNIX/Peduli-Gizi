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



Route::get("/", [HomeController::class, "index"]);

//* Authentication 
Route::get("/login", [LoginController::class, "index"]);

Route::resource("/profile", ProfileController::class);
Route::resource("/food-records", FoodRecordController::class);
Route::resource("/family-recipes", FamilyRecipeController::class);
Route::resource("/recipes", RecipeController::class)->scoped(["recipe" => "slug"]);

//* Route Admin 
Route::prefix("admin")->group(function () {
    Route::get("/", [AdminHomeController::class, "index"]);
    Route::get("/dashboard", [AdminDashboardController::class, "index"]);
    Route::resource("/age-categories", AdminAgeCategoryController::class);
    Route::resource("/need-categories", AdminNeedCategoryController::class)->scoped(["need_category" => "slug"]);
    Route::resource("/need-sub-categories", AdminNeedSubCategoryController::class)->scoped(["need_sub_category" => "slug"]);
    Route::resource("/recipes", AdminRecipeController::class)->scoped(["recipe" => "slug"]);
});