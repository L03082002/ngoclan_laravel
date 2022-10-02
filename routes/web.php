<?php

use App\Http\Controllers\FoodController;
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
    return view('welcome');
});

// Route::get('home_food', function () {
//     return view('food.home_food');
// });

Route::post('foods', [FoodController::class, 'store'])->name('foods.store');
// Route::resource('home_food', FoodController::class);

Route::resource('foods', FoodController::class);