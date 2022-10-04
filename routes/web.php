<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FamilyRecipeController;
use App\Http\Controllers\FoodRecordController;
use App\Http\Controllers\AgeCategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\NeedCategoryController;
use App\Http\Controllers\NeedSubCategoryController;
use App\Http\Controllers\ProfileController;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::resource('profile', ProfileController::class);
Route::resource('food-record', FoodRecordController::class);
Route::resource('family-recipe', FamilyRecipeController::class);
Route::resource('admin/age-category', AgeCategoryController::class);
Route::resource('admin/need-category', NeedCategoryController::class);
Route::resource('admin/need-sub-category', NeedSubCategoryController::class);
Route::resource('admin/recipes', RecipeController::class);