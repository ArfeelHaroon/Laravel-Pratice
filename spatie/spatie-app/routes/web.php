<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpatieController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/roles', [SpatieController::class, 'index'])->name('roles.index');
Route::get('/roles/create', [SpatieController::class, 'create'])->name('roles.create');
Route::post('/roles', [SpatieController::class, 'store'])->name('roles.store');
Route::get('/roles/{role}/edit', [SpatieController::class, 'edit'])->name('roles.edit');
Route::put('/roles/{role}', [SpatieController::class, 'update'])->name('roles.update');
Route::delete('/roles/{role}', [SpatieController::class, 'destroy'])->name('roles.destroy');