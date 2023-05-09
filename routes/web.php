<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/{blog}', [DashboardController::class, 'show'])->middleware(['auth', 'verified'])->name('blog.show');
Route::patch('/dashboard/{blog}', [DashboardController::class, 'edit'])->middleware(['auth', 'verified'])->name('blog.edit');
Route::get('/create', [DashboardController::class, 'storeshow'])->middleware(['auth', 'verified'])->name('dashboard.storeshow');
Route::post('/create', [DashboardController::class, 'store'])->middleware(['auth', 'verified'])->name('dashboard.storeshow');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
