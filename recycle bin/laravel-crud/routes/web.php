<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');

Route::get('/employee/create', function () {
    return view('create');
})->name('create');

Route::post('/employee/create', [EmployeeController::class, 'store'])->name('employee.store');