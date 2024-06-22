<?php

use App\Http\Controllers\GamesController;
use App\Http\Controllers\landingPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GuestLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\topScoreController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });


Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('dashboard.logout');
    Route::get('/games', [GamesController::class, 'index'])->name('games.index');
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/top-score', [topScoreController::class, 'index']);
});


Route::get('/guest-login', [GuestLoginController::class, 'login'])->name('guest.login');
Route::get('/games', [GamesController::class, 'index']);

Route::get('/Landing-page', [landingPageController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::post('/save-score', [GamesController::class, 'saveScore'])->name('score.save');
