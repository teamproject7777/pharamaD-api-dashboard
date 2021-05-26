<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GiveAwayController;
use App\Http\Controllers\PeriodicalMedicineController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/





// Routes
Route::resource('employees', EmployeeController::class);
Route::resource('patiens', PatientController::class);
Route::resource('givaways', GiveAwayController::class);
Route::resource('periodicals', PeriodicalMedicineController::class);
Route::resource('orders', OrderController::class);
