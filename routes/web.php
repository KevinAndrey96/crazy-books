<?php

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegionController;


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
Auth::routes();
Route::resource('home',HomeController::class)->names('home');
Route::resource('users',UserController::class)->names('users');
Route::resource('regions',RegionController::class)->names('regions');
