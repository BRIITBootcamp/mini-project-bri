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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/code')->middleware(['role:admin,pj'])->group(function () {
    Route::get('/', [App\Http\Controllers\CodeController::class, 'index'])->name('indexCode');
    Route::post('/store', [App\Http\Controllers\CodeController::class, 'store'])->name('storeKode');
});
