<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

Route::get('/person', [PeopleController::class, 'index'])->name('person.index');
Route::get('/person/create', [PeopleController::class, 'create'])->name('person.create');
Route::post('/person', [PeopleController::class, 'store'])->name('person.store');