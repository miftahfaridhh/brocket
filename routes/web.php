<?php

use Illuminate\Support\Facades\Route;   
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BracketController;
use App\Http\Controllers\ShowController;

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

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/test', [PagesController::class, 'test']);
Route::get('/testt', [PagesController::class, 'testt']);

Route::group(['middleware' => ['auth', 'verified']], function () {

    // Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
    Route::get('/create', [PagesController::class, 'create'])->name('turnamen.create');
    Route::get('/addteam', [ShowController::class, 'addteam'])->name('turnamen.addteam');
    
    Route::post('/generatebracket', [BracketController::class, 'generatebracket']);
    Route::post('/storeturnamen', [BracketController::class, 'storeturnamen']);    
});

Route::get('/bracket/{id}', [ShowController::class, 'show'])->name('turnamen.bracket');
Route::get('/dashboard', [ShowController::class, 'index'])->name('dashboard');