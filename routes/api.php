<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("/foods",[FoodController::class,"index"]);
Route::get("/foods/hot",[FoodController::class,"hot"]);
Route::get("/foods/{id}",[FoodController::class,"getfood"]);
Route::get("/carts",[CartController::class,"index"]);
Route::get("/categories",[CategoryController::class,"index"]);