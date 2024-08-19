<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderRiderController;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/orderrider',[OrderRiderController::class,'Orderrider'])->name('orderrider');
Route::get('/patient',[OrderRiderController::class,'patient'])->name('patient');
