<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('home');
});

// Item Route
Route::get('/item', [ItemController::class, 'index']);
Route::get('/item/detail/{code}/{name}', [ItemController::class,'detail']);

// Student Route
Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/detail/{code}/{name}', [StudentController::class,'detail']);

// Meal Route
Route::get('/meal', [MealController::class, 'index']);
Route::get('/meal/detail/{code}/{name}', [MealController::class,'detail']);

// Product Route
Route::prefix('product')->group(function() {
    Route::resource('/', ProdukController::class);
    Route::delete('/{id}', [ProdukController::class,'deleteData']);
});

