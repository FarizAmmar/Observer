<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PotonganController;

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

// Login or Logout
Route::get('/', [LoginController::class, 'show'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Home or Dashboard
Route::get('/home', [HomeController::class, 'show'])->middleware('auth');

// Employee
Route::get('/employee', [EmployeeController::class, 'index']);
Route::delete('/employee/{username}', [EmployeeController::class, 'destroy']);

// New Employee
Route::get('/new-employee', [EmployeeController::class, 'create']);
Route::post('/new-employee', [EmployeeController::class, 'store']);

// Edit
Route::get('/edit-employee/{user:username}/edit', [EmployeeController::class, 'edit']);
Route::put('/employee/{user:username}', [EmployeeController::class, 'update']);



Route::get('/absensi', [AbsensiController::class, 'show']);
Route::get('/new-absensi', [AbsensiController::class, 'new']);
Route::get('/edit-absensi', [AbsensiController::class, 'edit']);
Route::get('/potongan', [PotonganController::class, 'index']);
Route::get('/new-potongan', [PotonganController::class, 'new']);
Route::get('/edit-potongan', [PotonganController::class, 'edit']);
Route::get('/salary', [SalaryController::class, 'show']);
Route::get('/report', [ReportController::class, 'show']);
Route::get('/report-view', [ReportController::class, 'view']);
