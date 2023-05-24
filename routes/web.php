<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreateEvidenceController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;



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

Route::get('/', [HomeController::class, 'show'])->name('welcome');


Route::middleware('auth')->group(function () {
    // Rutas protegidas aquí
    Route::get('/experiences', 'ExperienceController@index')->name('experiences.index');
    
});

Auth::routes();
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::resource('home',HomeController::class)->names('home')->middleware('auth');
Route::resource('users',UserController::class)->names('users')->middleware('auth');;
Route::resource('regions',RegionController::class)->names('regions')->middleware('auth');
Route::get('/regions', [RegionController::class, 'index'])->name('regions.index')->middleware('auth');
Route::get('/regions/create', [RegionController::class, 'create'])->name('regions.create')->middleware('auth');
Route::get('/regions/edit', [RegionController::class, 'edit'])->name('regions.edit')->middleware('auth');

Route::get('/regions/show/{regionID}', [RegionController::class, 'show'])->name('regions.show');

Route::get('/books', [BookController::class, 'index'])->name('books.index')->middleware('auth');
Route::get('/books/region/{regionID}', [BookController::class, 'booksByRegionID'])->middleware('auth');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create')->middleware('auth');
Route::post('/books', [BookController::class, 'store'])->name('books.store')->middleware('auth');

Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit')->middleware('auth');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update')->middleware('auth');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy')->middleware('auth');


Route::resource('experiences',ExperienceController::class)->names('experiences')->middleware('auth');
//Route::get('/regions/{id}', 'RegionController@show')->name('regions.show');
Route::post('/evidence-store', [StoreEvidenceController::class, 'store'])->name('evidence.store')->middleware('auth');


Route::get('/evidences', [evidenceController::class, 'index'])->name('evidences.index')->middleware('auth');
Route::get('/evidences/create', [App\Http\Controllers\CreateEvidenceController::class, 'create'])->middleware('auth');
Route::get('/evidences/region/{regionID}', [evidenceController::class, 'evidencesByRegionID'])->middleware('auth');


Route::post('/evidences-store', [App\Http\Controllers\StoreEvidenceController::class, 'store'])->name('evidences.store')->middleware('auth');
Route::get('/evidences/{evidence}/edit', [evidenceController::class, 'edit'])->name('evidences.edit')->middleware('auth');

Route::delete('/evidences/{evidence}', [evidenceController::class, 'destroy'])->name('evidences.destroy')->middleware('auth');


Route::get('/evidence-create', [App\Http\Controllers\CreateEvidenceController::class, 'create'])->middleware('auth');

Route::get('/evidences', [App\Http\Controllers\IndexEvidenceController::class, 'index'])->middleware('auth');








