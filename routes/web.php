<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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
Route::resource('/', LandingController::class);
Route::get('clubs', [LandingController::class, 'clubs'])->name('landing.clubs');
Route::get('players', [LandingController::class, 'players'])->name('landing.players');
Route::get('managers', [LandingController::class, 'managers'])->name('landing.managers');
Route::get('stadiums', [LandingController::class, 'stadiums'])->name('landing.stadiums');