<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/giveaway', 'TestController@index');
Route::get('/order', 'OrderController@index');
Route::get('/order_detail/{id}', 'OrderController@detail');
Route::get('/patient', 'PatientController@index');
Route::get('/periodical', 'PeriodicalController@index');
Route::get('/accounting', 'AccountingController@index');
Route::get('/marketing', 'MarketingController@index');
Route::get('/delivery', 'DeliveryController@index');
Route::get('/delivery_detail/{id}', 'DeliveryController@show');