<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\HomeController;

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

Route::post('LendBook/', [App\Http\Controllers\LendController::class, 'LendBook'])->name('LendBook');

Auth::routes();

Route::middleware(['auth'])->group(function()
{
    Route::get('/booklist', [App\Http\Controllers\bookController::class, 'show'])->name('show');
    Route::get('/booklist', [App\Http\Controllers\bookController::class, 'search'])->name('search');

    Route::get("/home",[HomeController::class,'userHome'])->name('home');

});


//user
Route::middleware(['auth','user-role:user'])->group(function()
{
    //
});

//admin
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("admin/home",[HomeController::class,'adminHome'])->name('home.admin');

    Route::get('/addbook', [App\Http\Controllers\bookController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\bookController::class, 'create'])->name('create');
    Route::post('store/', [App\Http\Controllers\bookController::class, 'store'])->name('store');
    Route::delete('/{book}', [App\Http\Controllers\bookController::class, 'destroy'])->name('destroy');

});
