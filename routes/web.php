<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;

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

Route::get('/addbook', [App\Http\Controllers\bookController::class, 'index'])->name('addbook');
Route::get('/create', [App\Http\Controllers\bookController::class, 'create'])->name('create');
Route::post('store/', [App\Http\Controllers\bookController::class, 'store'])->name('store');

Route::post('edit/{book}', [App\Http\Controllers\bookController::class, 'edit'])->name('edit');
Route::post('edit/{book}', [App\Http\Controllers\bookController::class, 'update'])->name('update');

Route::delete('/{book}', [App\Http\Controllers\bookController::class, 'destroy'])->name('destroy');

Route::get('/', function () {
    return view('welcome');
});
