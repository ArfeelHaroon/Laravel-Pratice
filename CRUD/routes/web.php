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

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');

Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');

Route::GET('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');

Route::PUT('/employees/{employee}', [EmployeeController::class, 'update'])->name('employee.update');

Route::delete('/employee/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');