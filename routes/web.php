<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DivisionController;

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

Route::get('/', [HomeController::class,'index']);

Route::prefix('division')->name('division.')->group(function () {
    Route::post('tambah', [DivisionController::class, 'tambah'])->name('tambah');
});
Route::resource('division', DivisionController::class);

Route::prefix('user')->name('user.')->group(function () {
    Route::get('delete/{id}', [UserController::class, 'delete'])->name('delete');
});
Route::resource('user', UserController::class);