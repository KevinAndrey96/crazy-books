<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;



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

Route::middleware('auth')->group(function () {
    // Rutas protegidas aquí
    Route::get('/experiences', 'ExperienceController@index')->name('experiences.index');
    // ...
});

Auth::routes();
Route::resource('home',HomeController::class)->names('home');
Route::resource('users',UserController::class)->names('users')->middleware('auth'); 
Route::resource('regions',RegionController::class)->names('regions')->middleware('auth');
Route::resource('books',BookController::class)->names('books')->middleware('auth');
Route::resource('experiences',ExperienceController::class)->names('experiences')->middleware('auth');
Route::get('/experience/{id}', [ExperienceController::class, 'show'])->name('experience.show');




