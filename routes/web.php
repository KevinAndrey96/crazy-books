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
Route::get('/books', [BookController::class, 'index'])->name('books.index')->middleware('auth');
Route::get('/books/region/{regionID}', [BookController::class, 'booksByRegionID'])
    ->middleware('auth');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create')->middleware('auth');
Route::post('/books', [BookController::class, 'store'])->name('books.store')->middleware('auth');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit')->middleware('auth');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update')->middleware('auth');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy')->middleware('auth');


Route::resource('experiences',ExperienceController::class)->names('experiences')->middleware('auth');
//Route::get('/regions/{id}', 'RegionController@show')->name('regions.show');





