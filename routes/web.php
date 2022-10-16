<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FamilyRecipeController;
use App\Http\Controllers\FoodRecordController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminAgeCategoryController;
use App\Http\Controllers\AdminRecipeController;
use App\Http\Controllers\AdminNeedCategoryController;
use App\Http\Controllers\AdminNeedSubCategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\SearchController;

Route::get("/", function () {
    return redirect('/beranda');
});

Route::get("/beranda", [HomeController::class, "index"]);

//* Authentication 
Route::get("/login", [LoginController::class, "index"]);
Route::get("/login/google", [GoogleController::class, "login"]);
Route::get("/login/google/callback", [GoogleController::class, "callback"]);
Route::post("/logout", [LoginController::class, "logout"]);

//* Route User 
Route::get("/search", [SearchController::class, "index"]);
// Route::get("/search/age", [SearchController::class, "age"]);
// Route::get("/search/{needCategory:slug}", [SearchController::class, "needCategory"]);
Route::resource("/users", ProfileController::class)->scoped(["user" => "username"]);
Route::resource("/families", FamilyController::class)->scoped(["family" => "name"]);
Route::resource("/food-records", FoodRecordController::class);
Route::resource("/family-recipes", FamilyRecipeController::class);
Route::resource("/recipes", RecipeController::class)->scoped(["recipe" => "slug"]);

//* Route Admin 
Route::prefix("admin")->group(function () {
    Route::get("/", [AdminHomeController::class, "index"]);
    Route::get("/dashboard", [AdminDashboardController::class, "index"]);
    Route::resource("/age-categories", AdminAgeCategoryController::class);
    Route::get("/need-categories/check-slug", [AdminNeedCategoryController::class, "checkSlug"]);
    Route::resource("/need-categories", AdminNeedCategoryController::class)->scoped(["need_category" => "slug"]);
    Route::get("/need-sub-categories/check-slug", [AdminNeedSubCategoryController::class, "checkSlug"]);
    Route::resource("/need-sub-categories", AdminNeedSubCategoryController::class)->scoped(["need_sub_category" => "slug"]);
    Route::get("/recipes/check-slug", [AdminRecipeController::class, "checkSlug"]);
    Route::resource("/recipes", AdminRecipeController::class)->scoped(["recipe" => "slug"]);
});