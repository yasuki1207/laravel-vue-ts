<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Guest\Soccer\IndexController as SoccerIndexController;
use App\Http\Controllers\Guest\Soccer\StandingController as SoccerStandingController;
use App\Http\Controllers\Guest\TopController;
use App\Http\Controllers\ProfileController;
use App\Models\SoccerLeague;
use Illuminate\Foundation\Application;
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

Route::name('guest.')->group(function () {
    Route::get('/', TopController::class)->name('top');
    // サッカー
    Route::prefix('soccer')->name('soccer.')->group(function () {
        Route::get('/', SoccerIndexController::class)->name('index');
        Route::get('{prefix}/standing', SoccerStandingController::class)->name('standing');
    });
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
