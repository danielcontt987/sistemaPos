<?php

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

Auth::routes();

Route::get('/inicio', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/landing', [App\Http\Controllers\HomeController::class, 'landing'])->name('home');
Route::get('/punto-de-venta', [App\Http\Controllers\HomeController::class, 'pointOfSale'])->name('welcome');
Route::get('/clientes', [App\Http\Controllers\HomeController::class, 'clients'])->name('welcome');
Route::get('/ajustes', [App\Http\Controllers\HomeController::class, 'ajustes'])->name('welcome');

//User
Route::get('/get-user', [App\Http\Controllers\UserController::class, 'getUser']);
